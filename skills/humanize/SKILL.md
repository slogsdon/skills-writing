---
name: humanize
description: >
  Edit a draft to sound like Shane wrote it — removing AI-typical patterns, restoring conversational flow, and preserving technical precision. Use whenever Shane says: "humanize this", "edit in my voice", "AI detector pass", "make this sound like me", "rewrite this", "edit this post", "clean this up". Also invoke proactively if presented with a draft that contains dramatic colon-reveals, em-dash lists, semicolons between independent clauses, or staccato fragments that restate rather than land — these are markers that text needs a voice pass.
---

# Humanize / Voice Edit

`Profiles/voice.md` is authoritative for voice. Where this file and that profile disagree, **the profile wins** — read it before editing when it is available.

Edit draft text to match Shane's writing voice. The goal is prose with the structural and rhythmic properties of careful human writing: direct, specific, and recognizably his. A detector result is not the target and this skill does not promise one. The pattern lists below locate habits; they do not grade prose, and a hit is a prompt to read the passage rather than a defect.

## What this skill does

You're not rewriting for style points. You're removing the patterns that make text read as machine-generated, while preserving the technical precision and self-aware confessional register that characterizes Shane's work. The two goals reinforce each other, because the same structural tics that make prose read as machine-made are the ones that make it stiff.

Read the full draft before making any changes. Understand the argument. Then apply the edits below.

## Structural edits

### Em-dashes — absolute ban

`Profiles/voice.md` states this as a hard refusal: *"Never use em-dashes anywhere, ever, in any form."* That is broader than the list, interjection, and definition cases below. Remove **every** em-dash and every en-dash used as punctuation, then replace it with a comma, a parenthetical, or a period and a new sentence.

### Em-dash lists → prose with connectives

AI writing loves em-dash enumerations. Convert them to sentences.

**Before:** `This affects three things: clarity, speed, and cost.`
**After:** `This affects clarity, and it compounds into speed and cost problems.`

**Before:** `What you lose: auditability, traceability, and control.`
**After:** `There's one thing you lose when you defer: your ability to audit the work.`

When a colon-reveal lands on a single abstract noun, expand it into a phrase that includes a verb. `auditability` → `your ability to audit the work`. This is the single highest-signal AI pattern to eliminate.

### Semicolons between independent clauses → period + new sentence

**Before:** `The spec defines the work; the agent executes against it.`
**After:** `The spec defines the work. The agent executes against it.`

### Filler fragment sequences → prose; landing fragments stay

A staccato sequence that only restates the same point is a common AI rhythm. Merge those into prose. A sequence that *lands* a build-up is a different thing, and it is one of Shane's signature moves: he builds long and lands short, often landing more than once.

**Filler — merge:**
**Before:** `More specific. More actionable. Closer to the real problem.`
**After:** `More specific, more actionable, and closer to the real problem.`

**Landing — keep exactly as written:**
`...a 327-name scored lead tracker. Three emails sent. One reply. Zero closes.`

The test: does each fragment carry new, specific weight, or does it restate the same abstraction in fewer words? If it restates, merge. If it lands, leave it alone. Merging a landing fragment is the most damaging edit this skill can make.

### Em-dash interjections → commas

**Before:** `The model — to its credit — usually finds a path.`
**After:** `The model, to its credit, usually finds a path.`

### Parentheses for inline definitions, not em-dashes

**Before:** `AX — Agent Experience — is the term I use for this.`
**After:** `AX (Agent Experience) is the term I use for this.`

### Break academic compound sentences

Long sentences chained with "which" or "that" clauses feel generated. Split them.

**Before:** `This is a mechanism which, when understood correctly, changes how you think about the whole problem.`
**After:** `This is a mechanism. When you understand it correctly, it changes how you think about the whole problem.`

## Vocabulary and phrasing

### Prefer concrete over abstract

- "in outcome" → "in practice"
- "leveraging" → whatever it actually means in context
- "consistently reach a state where" → "inevitably realize"
- "productive shift" → "important thing the shift requires" (or whatever the actual substance is)
- Technical labels → descriptions when speaking to a general audience ("computer scientists" → "people who built them"), but preserve precision when the audience is technical
- Vague compounding → concrete cause-effect: "in ways that compound" → "those near misses compound"; "consistently, in ways that [verb]" → name what actually accumulates

### Social and short-form register (X, Bluesky)

On social surfaces the audience is broader than the topic, so implementation
vocabulary gives way to the reader's vocabulary even when the subject is
technical. Confirmed by Shane's hand edits to the `pi-deferred-skill-catalog`
posts on 2026-09-21:

- "system prompt" → "configuration"
- "prompt" → "context"

This is not a brevity substitution. "configuration" is the same character count
as "system prompt", and "context" is longer than "prompt". It is about which
words the reader already owns.

LinkedIn kept the implementation terms in the same batch, so the rule is scoped
to short-form social. Whether LinkedIn is deliberately exempt is an open question
recorded in `Knowledge/Projects/Personal Brand/Voice Profile Amendment — Social Register`.

### Preserve accurate qualifiers — never add them

Shane hedges **sparingly and accurately**, and when he is sure he does not soften. Keep the hedges already doing honest work ("so far", "with any certainty") and cut ones that pad a claim.

Do **not** add a hedge to a claim the draft states plainly. That manufactures uncertainty the author never expressed, and his own transcript names it as his failure mode: *"i'm using weaker replacements. then, circling around the topic without making a solid directional choice."* Do **not** add "not only...but also" — it is on `Profiles/voice.md`'s avoid list and on the same tell lists this skill exists to remove.

### Concessive and negative connectives — confirm before substituting

Concessive "just" is usually weaker than its replacement: "just with slightly better manners" → "albeit with slightly better manners." Negative parallels can take "nor": "they can't ask a colleague, nor do they phone a friend."

**Caution:** "albeit" and "nor" are not in `Profiles/voice.md`'s phrase bank, and they read as formal register while Shane's is consultative. Substitute only when the formal word is plainly the more precise one; otherwise leave the author's connective alone.

### Remove moral-weight filler

Cut: "simply", "just", "obviously", "of course", "clearly" — these carry condescension. Also cut sentence-starting "And" unless it's load-bearing rhythmically.

### Colloquial asides — preserve, never manufacture

A well-placed colloquialism breaks the register productively, but only when it is grounded and specific. "Break out the metaphorical popcorn" works because it is his. **One per section is a ceiling, not a quota.** If a section has no grounded aside, leave it with none. Existing texture is voice; invented texture is performance.

## Structural tells to inspect (hypotheses, not bans)

These shapes usually indicate machine-made prose. Each is a prompt to read the passage, not a verdict. `Profiles/voice.md` bans the first two outright; treat the rest as calibration.

1. **Single-noun colon-reveals** — `What you lose: auditability.` Expand the noun into a phrase. Hard refusal in `Profiles/voice.md`.
2. **Parallel staccato fragments** — merge only if they restate rather than land (see above).
3. **"which is [adjective], consistently, in ways that [verb]"** — This pattern almost never appears in human writing. Rewrite it.
4. **Sentence-final list of three** with identical grammatical structure — Break up or convert one element to a clause.
5. **Repetitive sentence-opening rhythm** — If five consecutive sentences start with "The [noun]", vary the openers.

## What to preserve

Do not over-edit. These things should survive the pass:

- **Technical precision** — If a specific term (JSONL, `run_started_at`, AX) is the right word, keep it. Don't replace technical accuracy with accessibility theater.
- **The confessional hook** — Shane's writing often opens with a self-implicating admission. Preserve this register. "I got quite good at prompting" is different from "I became skilled at prompting" — the first is honest, the second is résumé language.
- **First-person grounding** — Claims that start with "I" or "we" are load-bearing. Don't convert them to passive or impersonal constructions.
- **The argument structure** — You're editing prose, not restructuring the argument. Preserve the overall order of claims. Minor reordering within a paragraph or brief elaborations that sharpen the voice register are allowed — but flag them rather than treating them as transparent.
- **Intentional short sentences** — A one-sentence paragraph after a dense block is often deliberate pacing. These can be preserved as-is or absorbed into surrounding prose if the merged version reads more naturally in Shane's voice. Use judgment; flag the choice.

## Process

1. Read the full draft. Identify the core argument and voice register.
2. Scan for the AI patterns listed above (colon-reveals, fragment sequences, em-dash lists, semicolons as clause connectors).
3. Apply structural edits first, then vocabulary/phrasing.
4. Run a **preservation** pass. This is the step that protects the voice, and it is the one that gets skipped:
   - Are the accurate hedges that were already there still there?
   - Is every grounded aside, joke, and unusual detail still intact?
   - Did a landing fragment or short closing line survive?
   - Is the first-person or confessional material untouched?
   - Did the fragment, semicolon, or colon rule fire on something that was earning its place?
   If the draft contained none of these, leave it that way. Do not add them.
5. Two edits are still real work, because they replace vagueness with substance rather than adding decoration: make vague compounding language concrete, and swap a technical label for a description where the audience warrants it.
6. Read the result aloud (mentally). If a sentence sounds like it could have come from a corporate blog, rewrite it.
7. Verify nothing load-bearing was lost — especially hedges, confessional moments, and technical terms.
8. Never invent a specific. If a better sentence needs a fact, number, or experience only Shane has, leave `[TK: your question]` in the text and list it in your return rather than writing plausible filler.
9. Return the edited draft. Note any judgment call you made, and flag every `[TK]` you added or found.

## Measuring the pass

`scripts/prose_stats.py` measures the habits this skill edits for: hedge and booster density, anchor density, sentence-length variation, and model-lexis hits. It deliberately produces no composite score.

Measure the same piece before and after, then compare the two readings. The established range for this voice is recorded in the vault note **Voice Cadence Baseline** (`Knowledge/Publishing/`): `hedge_per_100` median 0.86 (range 0.30 to 1.06), `anchors_per_100` median 2.91, `body_sentence_cv` median 0.435, with `model_lexis` and `signpost_opener_share` at zero across every piece measured.

If a pass pushes `hedge_per_100` above that range, the edit is drifting toward the circling register this skill exists to prevent. If it pushes `anchors_per_100` down, specificity was traded away to shorten.

```bash
python3 scripts/strip_markdown.py draft.md > /tmp/draft.txt
python3 scripts/prose_stats.py /tmp/draft.txt
```

## Example patterns in practice

These are drawn from actual edits on the AX Shift post:

| Original | Edited | Why |
|---|---|---|
| `What you lose when you defer: auditability` | `there's one thing you lose when you defer: your ability to audit the work` | Expands single-noun reveal into a phrase |
| `The problem was somewhere I hadn't looked yet.` | (preserved as-is) | First-person confessional, load-bearing |
| `It's not a failure; it's the mechanism.` | `It's not a failure to find gaps here. That's the mechanism you need.` | Semicolon → period; expands the claim |
| `More specific. More examples. Closer to real use.` | `More specific, with more examples, and closer to real use.` | Filler fragment sequence → prose. A fragment that *lands* a build-up stays. |
| `AX — Agent Experience —` | `AX (Agent Experience)` | Em-dash definition → parenthetical |
| `people who built them` instead of `computer scientists` | (context-dependent) | Concrete description when audience isn't technical |
| `system prompt`, `prompt` (on social) | `configuration`, `context` | Implementation vocabulary → the reader's vocabulary. Not brevity: "configuration" is the same length. |
| `Sharp edge if you try it:` | `Beware if you try it.` | Coined label plus colon → plain imperative. Direct, second-person, no label. |

## Deliberately not adopted

Checked against `Profiles/voice.md` and the voice interview transcript, and rejected. Do not re-import these — each one sounds reasonable in isolation and each one flattens this voice:

- **Making the colon-reveal and semicolon rules contextual.** `voice.md` states both as hard refusals: *"Never write em-dash lists, single-noun colon-reveals, or use semicolons between independent clauses."* Advice to treat them as "a search aid, not a ban" is wrong for this profile, however good it is as general guidance.
- **A lunch-conversation or whiteboard register test as a hard rule.** His register is consultative by default and formality matches function, not status. A flat spoken-language test strips the written register the profile asks for.
- **Restoring warmth and humour as positive craft.** Restoring humour where an edit removed it is right for many writers. `voice.md`: humour is *"rare in writing-with-purpose… not a craft move on the page."* Do not add it.
- **Any detector optimisation, in either direction.** Not a goal and not a claim. Upstream `scripts/prose_stats.py` documents that its own stylometric composite came out inverted.
- **Inserting hedges, asides, or qualifying phrases as human signals.** Existing texture can be preserved; invented texture is performance.
