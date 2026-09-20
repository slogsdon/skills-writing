# scripts/

Diagnostic linters vendored from [addyosmani/clarity](https://github.com/addyosmani/clarity)
(MIT, see `LICENSE.clarity`). Both files are **byte-identical to upstream** and
deliberately unmodified — check with:

```bash
shasum -a 256 scripts/*.py
```

| Upstream path | sha256 |
|---|---|
| `scripts/strip_markdown.py` | `ed69bd01a9f847ee48000fb65599bb27bcc4916380c9cfb4de112881f63182f1` |
| `scripts/prose_stats.py` | `d9b9b8e562de3b741d1e3b27c141e2b248740747a1e7b2cebfebb6d127571063` |

Vendored from `main` on 2026-09-20. To update, re-download and confirm the
checksums changed rather than hand-editing.

## Usage

```bash
python3 scripts/strip_markdown.py draft.md > /tmp/draft.txt
python3 scripts/prose_stats.py /tmp/draft.txt
# or in one pass:
python3 scripts/strip_markdown.py draft.md | python3 scripts/prose_stats.py -
```

## How to read the output

**There is no composite score, and that is deliberate.** Upstream documents why:
a stylometric composite run against classifier verdicts came out *inverted* — the
genuinely human control scored as the riskiest text. A single number invites
optimising toward the machine register.

Treat every hit as a hypothesis and open the passage. The measurements worth
watching for this voice specifically:

- `body_sentence_cv` — sentence-length variation. `Profiles/voice.md` calls the
  rhythm "long building then short landing". Low variation means that shape is
  missing.
- `short_line_share` — upstream warns this is masked by headings and list items.
  If most of the short lines are structural, read `body_sentence_cv` and ignore
  this.
- `anchors_per_100` — numbers, quotes, and mid-sentence proper nouns. This is the
  closest mechanical proxy for earned specificity.
- `hedge_per_100` versus `booster_per_100` — read together. `voice.md` says
  hedges are "sparing and accurate", so a *high* hedge count is the signal, not a
  low one.
- `model_lexis` / `stock_openers` / `contrastive_pivots` — mostly already covered
  by `voice.md`'s avoid list and `humanize`. Overlap here is confirmation, not
  new information.

**Do not use this as a quality gate, and never as an authorship or detector
verdict.** It locates habits; it cannot tell you whether a piece says anything.
