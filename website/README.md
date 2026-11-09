# Writing Skills: microsite

Static microsite for [Writing Skills](https://github.com/slogsdon/skills-writing), served
at `https://projects.logsdon.io/writing-skills/`.

Source revision: `d4e7ce75944b567bd9406aa3e53151ce24ca4f9f` (branch `feature/website` at
the time of writing, content date 2026-10-19). All product content on the site is derived
from that revision: `README.md`, `CHANGELOG.md`, `.claude-plugin/plugin.json`, the six
`skills/*/SKILL.md` files, their `references/` and `evals/` files, and
`scripts/README.md`.

**Publication status: planned.** Confirmed on 2026-11-05 as the eighth microsite in the
collection (`T12` in `shane.logsdon.io` `TASKS.md`, `tasks/plan.md`). It is built and
verified as an artifact; nothing here was deployed, so the Worker name and route in
`cloudflare.config.ts` are reserved, not live.

## Build

Node 26.12.0, PHP 8.3+, and Composer are required.

```sh
cd website
composer install --no-interaction --prefer-dist
npm install                        # regenerates package-lock.json
node scripts/build-site.ts          # SITE_NOINDEX=1 by default: preview, noindex
SITE_NOINDEX=0 node scripts/build-site.ts   # indexable production artifact
```

Output is a physical subtree at `website/dist/writing-skills/`, plus `dist/_headers` in
preview builds. Nothing else is written at the `dist/` root: the hub owns `/robots.txt`,
`/sitemap.xml`, and the slashless `/<slug>` redirect.

Packaging (local only; neither command deploys):

```sh
npm ci
npx --no-install cf build --mode microsite
npx --no-install cf build --mode microsite-production
```

## One file drives the site

`site.json` holds the values the build and the pages need: `slug`, `name`, `origin`,
`description`, `lastmod`, and the `source` URL. `scripts/build-site.ts` validates them,
exports them to the PHP layout as `SITE_SLUG`, `SITE_NAME`, `SITE_ORIGIN`, `SITE_SOURCE`,
and `SITE_NOINDEX`, and mounts every emitted URL under `/writing-skills/`. `lastmod` is the
content revision date of the source (`git log -1 --format=%cs` → `2026-10-19`), not the
build date.

`cloudflare.config.ts` keeps the Worker name (`writing-skills-microsite`, with
`-preview` for non-production builds) and the fetch route
`projects.logsdon.io/writing-skills/*` as literals, because they are deployment identity
rather than site content.

## What the build asserts

`scripts/build-site.ts` fails the build unless all of the following hold:

- `index.html`, `404.html`, `sitemap.xml`, `assets/site.css`, `assets/tokens.css`,
  `assets/fonts/*` exist and are non-empty.
- No `_redirects`, `robots.txt`, `sitemap.xml`, `index.html`, or `404.html` at the
  `dist/` root; the root holds only `writing-skills/` (and `_headers` when
  `SITE_NOINDEX=1`).
- Every HTML page has exactly one `<h1>`, a unique `<title>` containing the project name,
  a meta description, the skip link, the `main` landmark, and the primary `nav`.
- Canonical and `og:url` equal `https://projects.logsdon.io/writing-skills/<path>`; the
  404 carries neither and is always noindex.
- The `noindex` meta matches `SITE_NOINDEX`, and the footer links both
  `https://projects.logsdon.io/` and `https://shane.logsdon.io/`.
- No `href`/`src` is root-relative outside `/writing-skills/`, and every local link and
  asset target exists in the artifact.
- The sitemap lists exactly the canonical pages, with `lastmod` set to `site.json`'s
  `lastmod`.

The Google Fonts `@import` is stripped from the copied `tokens.css` (fonts are served
locally) and `/assets/` inside the copied CSS is rewritten to `/writing-skills/assets/`.

## Pages and content provenance

- `pages/index.php` is F · Frontispiece: what the plugin is, the six skills in one
  definition list, the voice/profile distinction stated up front, and status. No figure.
- `pages/getting-started.php` is D · Assembly Order: six numbered steps. Step 1 is a
  decision (supply a voice profile, or use only the two standards-based skills); step 2 is
  installation; the later steps depend on both.
- `pages/choosing-a-pass.php` is the extra page this task requires: all six skills and when
  each applies, an explicit reusable / Shane-specific split, the voice-profile
  requirement, six before-and-after rows quoted from `skills/humanize/SKILL.md`, and two
  eval cases quoted from `skills/humanize/evals/evals.json`.
- `pages/404.html.php` is G · Recovery, adapted from the pilot skeleton.
- The primary nav lives in `resources/partials/layout.php` and is fixed by the skeleton
  (Getting started, Source, Projects), so the third page is linked from the frontispiece,
  the guide, and every page's "where to go" list rather than from the header.

Content rules this site follows, and the choices behind them:

- **Marketplace installation is quoted, not expanded.** `README.md` line 7 says only
  "Install via the [slogsdon-claude-code-config marketplace]" and prints no command lines,
  so the guide repeats that sentence verbatim and points at the marketplace repository. No
  `claude plugin install …` command was invented for the page. See `T12`: "marketplace
  references" are the thing to verify, and an invented command would fail that.
- **No worked editing example was fabricated.** The repository's eval cases record prompts
  and expected behaviours, not verbatim edited drafts, so a full before-and-after pass is
  not published. `choosing-a-pass.php` says so explicitly and substitutes what does exist
  verbatim: six documented edit rows from `SKILL.md` and two runnable eval cases. This is
  the omission the task allows, recorded here and on the page.
- **No personal vault profile is published.** `Profiles/voice.md` is referenced by three
  skills and is not in the repository (its absence was checked at this revision). The site
  describes only what the skills require of a profile: precedence over skill defaults,
  hard refusals, deliberate choices a review must not flag, and the no-inference rule. No
  profile content, no voice measurements, and no `Voice Cadence Baseline` figures appear
  anywhere in the artifact.
- **Portability is stated per skill, not as a general claim.** `plain-language` and
  `ste100` are documented as working on anyone's text; `humanize`, `ms-style-pass`, and
  `writing-review` are documented as needing your own profile; `writing-interview` is
  documented as Shane's and not portable as shipped.
- **Status qualifiers are kept.** Plugin version 0.5.0 and its 2026-10-19 date come from
  `.claude-plugin/plugin.json` and `CHANGELOG.md`. The changelog's history (the removed
  enrichment step, the register rules from hand edits, the scoring gate) is summarised,
  not smoothed over.

`public/assets/tokens.css`, the fonts, `assets/fonts/LICENSES.txt`, and
`public/assets/site.css` are the collection hub's, copied through the pilot skeleton.
`design/provenance.json` came with them and records the personal-site hashes at
hub-relative paths. One rule was appended to the end of the pilot's "Project microsite
additions" section: a `.prose blockquote` style for the README's one-line installation
instruction, which is the only blockquote on the site. It uses existing tokens (rule
colour and spacing) and introduces no colour or weight.

`composer.lock` pins `slogsdon/flat-file` to the same reference as the hub
(`dev-code-highlight`, `3ba5285e424aa376af324db0424f53c33a2c07a5`).
`package.json` pins the hub's `cf`, `@cloudflare/vite-plugin`, and `vite` versions exactly.

Known seed leftover, not changed because the fan-out forbids editing `composer.*`:
`composer.json`'s `description` still reads "Microsite for Deferred Skill Catalog". It has
no effect on the build or the artifact.

## Verified here

- `composer install`, `npm install`, `node scripts/build-site.ts` from clean (preview and
  `SITE_NOINDEX=0`).
- The artifact assertions above, plus `find dist -type f` (12 files) and the
  out-of-namespace URL grep (no output).
- `npm ci`, `npx --no-install cf build --mode microsite`, and
  `npx --no-install cf build --mode microsite-production` (packaging only, no deploy).
- `shasum -a 256 scripts/*.py` in the source repository matches the hashes recorded in its
  `scripts/README.md` for both vendored linters.
- The step 6 linter run (2026-11-09, Python 3.15.0, source `d4e7ce7`):
  `python3 -I scripts/strip_markdown.py README.md | python3 -I scripts/prose_stats.py -`.
  The page quotes the first part of its output verbatim and paraphrases the `LOOK HERE`
  section (four triads, the short-line note).
- The marketplace route resolves to this source. On the author's machine,
  `skills-writing@slogsdon-claude-code-config` is installed at version 0.5.0 from
  `gitCommitSha` `d4e7ce7`, this revision, with all six skill directories present.
  `slogsdon/claude-code-config`'s `marketplace.json` lists `skills-writing` with
  source `slogsdon/skills-writing`, and that repo, the marketplace and the grow kit are
  all public. This is existing evidence, not a fresh install.
- Absence of `Profiles/` and any `voice.md` in the source repository at this revision.
- Skill inventory as read at this revision: six `skills/*/SKILL.md`, two with
  `references/` (`humanize`, `ms-style-pass`), four with `evals/` (`humanize`,
  `ms-style-pass`, `writing-review`, `writing-interview`).

## Not verified here (Unverified)

No skill was run and no plugin was installed while building this site. Product claims on
the pages are quoted from the source revision, and the pages say so where it matters.

- The install commands on the guide page (`/plugin marketplace add
  slogsdon/claude-code-config`, `/plugin install skills-writing@slogsdon-claude-code-config`,
  `pi install git:github.com/slogsdon/skills-writing`), quoted from
  `slogsdon/loop-and-gate-grow-kit` `reference/tools.md`. Not run for this page. The pi
  route was not exercised at all.
- The six trigger phrases on the guide page, from the `description` front matter of each
  `SKILL.md`. Read, not invoked.
- The pass order `interview → draft → humanize → ms-style-pass`, from `README.md`
  ("How they fit together"). `workflow-stage-draft` is not in this repository, so the order
  is the source's statement and was not exercised.
- The `humanize` scoring gate (threshold 90, at most three rescores,
  `kept (−N): reason`), from `SKILL.md` and `CHANGELOG.md`. Read, not scored.
- The eval-case expectations on the choosing page, from
  `skills/humanize/evals/evals.json`. Neither case was executed against a model here.
- The six before-and-after rows, quoted verbatim from the "Example patterns in practice"
  table in `skills/humanize/SKILL.md`. That table's provenance ("actual edits on the AX
  Shift post") is the source's claim and was not re-checked; the rows are published as
  quotations from the skill file, not as a demonstration produced for this site.
- The linters' output: `scripts/README.md`'s usage commands and reading notes are quoted;
  `strip_markdown.py` and `prose_stats.py` were not run against a draft here. That they are
  byte-identical to upstream rests on the recorded hashes, which match locally.
- The Microsoft style substitutions and the STE100 rules, read from
  `references/terms.md` and `skills/ste100/SKILL.md`. The STE100 dictionary is not in the
  repository either, which is why that skill flags unapproved words as
  `needs verification`.
- The `writing-interview` behaviour around a personal vault and a publishing workflow that
  refuses to ship with open `[TK]` items, from `skills/writing-interview/SKILL.md`. Those
  external systems were not present in this build environment.

## Deployment

Not performed from this repository: no `cf deploy`, no `cf previews deploy`, no Cloudflare
API call. This repository only produces the artifact and the Worker configuration. The hub
owns the hostname (`projects.logsdon.io`), the sitemap index, and the slashless redirect;
this Worker claims only `projects.logsdon.io/writing-skills/*`.

Publication waits on Checkpoint C (`T12`), not on build readiness.
