# Changelog

## 0.3.0 — 2026-09-20

**Voice-fidelity corrections to `humanize`,** checked against `Profiles/voice.md`
and the voice interview transcript. The skill was over-correcting in a direction
its own author had already named as a failure mode.

- **Enrichment pass removed.** Step 4 told the agent to *add* hedges, *add*
  "not only...but also", and *find* one colloquial aside per section. `voice.md`
  says Shane "hedges sparingly and accurately", and the transcript names the
  failure mode outright: *"i'm using weaker replacements. then, circling around
  the topic without making a solid directional choice."* The step is now a
  preservation pass.
- **Fragment rule narrowed.** Blanket fragment-merging flattened a signature
  move. Filler fragments merge; fragments that land a build-up stay.
- **Detector framing removed.** The skill no longer promises a detector result,
  and the pattern lists are framed as hypotheses rather than bans.
- **Em-dash ban made absolute**, matching `voice.md`'s hard refusal.
- **`albeit` / `nor` demoted** to a confirmed substitution — neither is in the
  profile's phrase bank, and both read more formal than Shane's register.
- **`Profiles/voice.md` declared authoritative** where it and this skill
  disagree.

**Added `writing-review`** — read-only diagnosis with `keep` / `revise` /
`ask-author` / `cut` verdicts, plus the substance, flatten, relation,
specificity, and triad tests. It reports and stops; it never rewrites.

**Added `writing-interview`** — the grounding gate that runs before drafting.
`voice.md` already required this: *"Don't generate Shane-voiced content without
grounding in my actual thoughts or notes. The voice is portable. The thinking
isn't."* The skill gives that rule a procedure. It asks and then waits — no
opening paragraph, no settled outline — because an agent that starts drafting
will supply the missing material itself.

**Wired into `workflow-stage-draft`** as `interview` → `draft` → `humanize` →
`style`, with `interview` skippable for pieces that need no personal material.

**Added `scripts/`** — `strip_markdown.py` and `prose_stats.py`, vendored
byte-identical from `addyosmani/clarity` (MIT, `scripts/LICENSE.clarity`).
Diagnostic only, and deliberately score-free: upstream found its own stylometric
composite came out inverted, with the human control scoring as the riskiest text.

**Recorded a voice baseline** in the vault note `Voice Cadence Baseline`
(`Knowledge/Publishing/`), measured across eight finished pieces and 8,957 words,
with the per-piece readings and reproduce commands. Two figures are identical in
every piece measured: `model_lexis` = 0 and `signpost_opener_share` = 0.00. The
avoid-lists in `voice.md` describe how the prose already reads rather than setting
an aspiration. `humanize` and `scripts/README.md` both point at the note.

**Added evals** — 10 cases for `humanize` (including two false-positive cases
that fail if the skill over-corrects an earned fragment or adds a hedge), 4 for
`writing-review`, and 3 for `writing-interview`. The hedging, fragment, and
detector assertions are genuine regression tests: the previous `humanize`
explicitly instructed all three behaviours the tests now forbid.

**Fixed:** `plugin.json` sat at 0.1.0 while this changelog had reached 0.2.0, and
the README still advertised "2 skills" after `plain-language` and `ste100`
shipped in 0.2.0.

## 0.2.0 — 2026-08-04

**Added two skills**, both committed locally on an earlier date and never
pushed — the branch had drifted into a detached HEAD while `main` sat two
commits behind origin. Recovered and shipped 2026-08-04.

- **`plain-language`** — ISO 24495-1 plain language.
- **`ste100`** — ASD-STE100 Simplified Technical English.

Neither appeared in the plugin description or the marketplace listing before
now. Both were on disk and working the whole time.

## 0.1.0

Initial release — humanize and ms-style-pass.
