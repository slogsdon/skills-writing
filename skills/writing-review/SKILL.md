---
name: writing-review
description: >
  Review a draft and report findings without rewriting it. Use when Shane says: "review this", "critique this draft", "what's wrong with this piece", "give me feedback on this", "is this any good", "review my post", "poke holes in this", "/writing-review". Distinct from humanize (which edits the prose) and ms-style-pass (which applies house style) — this one diagnoses, ranks the findings, and stops. Does not write to or modify any file.
---

# Writing Review

One job: tell Shane what is wrong with a piece, biggest problem first, without changing a word of it.

## The rule that makes this skill work

**Never produce a replacement draft.** The moment you write a competing version, the review stops being a diagnosis and becomes a negotiation about your prose. Shane invokes this when he wants to decide, not to be handed a rewrite. If he wants the edit, he will run `humanize`.

Also: never edit the file, never save a new file, never stage anything. The review is reported in chat and nowhere else.

## The verdict vocabulary

Use exactly these four, and no others:

| Verdict | Meaning |
|---|---|
| `keep` | A pattern is present but earned, or the medium requires it. State what earns it. |
| `revise` | The draft already contains enough material for an honest improvement. |
| `ask-author` | The fix needs a fact, mechanism, example, or experience only Shane has. Ask for exactly that. |
| `cut` | The passage only repeats, performs, or reaches for a close. |

`ask-author` is what earns this skill its keep. It is the alternative to inventing the missing detail, which is the single easiest way to damage a draft while believing you improved it. A review with four `ask-author` findings is worth more than one with four clever rewrites.

## Order of work

Diagnose in this order. Do not jump to sentences before the earlier layers are settled: a sentence-level finding on a piece with a substance problem is noise.

1. **Truth and scope** — claims, numbers, attribution, uncertainty, conditions, links.
2. **Substance** — the actual point, and the material only Shane could supply.
3. **Development** — does each paragraph depend on the one before it?
4. **Sentences** — surface patterning.
5. **Craft** — did the piece lose warmth, stance, or a landing?

## Piece-level diagnosis

Open with this. Use the fields that carry information and omit the rest.

```txt
Job:          what kind of piece this is, who it's for, what should change for them
Substance:    what it specifically contributes, or what's missing
Trust:        factual support, attribution, uncertainty, and any preservation risk
Development:  how it moves, and where it stalls, repeats, or turns into a list
Voice:        what reads as Shane's, and where generic register takes over
Ending:       whether it stops on the last useful thought or reaches for a close
Top fixes:    the two or three changes with the largest expected gain, ranked
```

## Passage-level findings

One block per material finding, ordered by `Top fixes` rather than by position in the draft.

```txt
Passage:      the shortest quote that locates the issue
Verdict:      keep / revise / ask-author / cut
Pattern:      a short name
Why:          what the passage does instead of its job
Suggestion:   a supported replacement, a precise question for Shane, or the reason to cut
Safety check: does the suggestion preserve facts, attribution, scope, and voice?
```

Before proposing any replacement, check it for the same formula, inflated claim, or invented detail you just flagged.

## Tests to run before naming a finding

**Substance test.** Could this paragraph appear nearly word for word in someone else's article on the same subject? If yes, it is filler even if it is well made.

**Flatten test.** State the claim without the cadence. If nothing specific remains, the formula was carrying reasoning that was never done.

**Relation test.** Restate the implied connection using *because*, *although*, *once*, *if*, *so*, or *which*. If doing so requires inventing a relation, only rhythm was there.

**Specificity test.** Remove the specific. Does the argument weaken? If not, it was a flex, not evidence.

**Triad test.** Does each of the three items carry distinct weight? A parallel-grammatical three with identical structure is filler dressed as rhythm.

## Do not report these as defects

`Profiles/voice.md` is authoritative for voice. These are deliberate choices, and a review that flags them is wrong:

- A fragment sequence that *lands* a build-up (`Three emails sent. One reply. Zero closes.`).
- The closing punch that restates the thesis in compressed form.
- The confessional or first-person opener.
- Hedges doing honest work, and the absence of a hedge where the claim is settled.
- Functional specificity: proper nouns, versions, file paths, gateway names doing real work.
- Headers carrying the argument, so a header-only read still surfaces the spine.
- One grounded colloquial aside, or none at all.
- A deliberately short sentence landing after a long build.

The governing calibration: change repeated use or unsupported performance, not the device itself.

## Hard refusals bind the review

`Profiles/voice.md`'s `<hard_refusals>` are absolute, so a violation is a finding no matter how well it reads:

- em-dashes anywhere, in any form
- "simply", "just", "obviously", "actually"
- em-dash lists, single-noun colon-reveals, semicolons between independent clauses
- highlight-reel structure, emoji-prefixed bullet headers
- top-ten lists, meme formats, regurgitated AI-session pastes
- invented specifics, war stories, or receipts

## Reporting a clean piece

If the prose already performs its job, say so plainly and stop. Do not manufacture findings to look useful. "This is ready" is a valid review outcome and often the correct one.

## Handoff

Close by collecting every open `ask-author` item into one list of questions. That list is the input to the next pass — without it, `humanize` has nothing to work with but the prose itself.

This skill is the agent-side input to **Gate 4** (copy: true, in-voice, nothing fabricated). It produces the findings; the human makes the call.
