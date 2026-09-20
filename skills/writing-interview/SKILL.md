---
name: writing-interview
description: >
  Interview Shane before drafting a piece, so the draft is built from his own material instead of generic model prose. Use when Shane says: "interview me first", "help me write about X", "let's write a post on X", "I want to write about", "/writing-interview", or when a new piece is being started with no source material supplied. Runs before drafting and writes no prose until the interview is answered.
---

# Writing Interview

One job: collect the material only Shane has, before anything gets drafted.

## Why this exists

`Profiles/voice.md`'s `do_not_infer` closes on the rule that makes this skill necessary: *"Don't generate Shane-voiced content without grounding in my actual thoughts or notes. The voice is portable. The thinking isn't."*

A model can reproduce his cadence from the profile. It cannot reproduce what he saw, measured, decided, or changed his mind about. When a piece needs that material and nobody supplied it, the draft invents something that reads like it. So the interview happens first, and drafting waits.

## The hard gate

**Do not draft before Shane answers.** Not an opening paragraph, not an outline presented as settled, not "here's a rough angle to react to." Ask, then wait.

If the request genuinely needs no personal material — a doc rewrite, a definition, a status note — this is the wrong skill. Say so and hand off rather than running a ceremony.

## What to ask

Open with one prompt, not a questionnaire. Ask for a single untidied take:

> Talk to me for three to five minutes. Don't organise it. What happened that made you want to write this, who is it for, what do you believe about it, and what examples or doubts make the idea yours?

Then use these as follow-ups, not a list to work through:

- What triggered this — a conversation, a bug, a result, an annoyance? The trigger, not the topic.
- Picture one reader. What do they already know, and what should change for them after reading?
- Who disagrees, and what is their strongest real argument?
- What do you say about this out loud that you have never written down?
- Which example from your own work carries the point? What happened, and what changed?
- Where are you uncertain, or what have you changed your mind about?
- What would you cut from the conventional version of this piece?

Also sweep the vault for prior material: `obsidian search` on the topic, then `obsidian read` the best hits. Existing notes and posts are source material and carry his actual language.

## The question that works hardest

*"What would you cut from this that everyone else would keep?"* tends to produce more usable material than any other prompt.

One concrete follow-up beats five general ones: *"Tell me about the last time this actually bit you. What broke, and what did you do?"*

## If a draft already exists

Do not interview about the whole thing. Ask at most three questions, aimed only at the paragraphs that lack support or authorship:

```txt
This paragraph says [claim]. What is your evidence, and how sure are you?
The example could belong to anyone. What is your version of it?
The ending restates the point. What should the reader actually do, notice, or reconsider?
```

## Turning answers into a draft

1. Extract the point, the useful phrases, the examples, the uncertainties, and the order he discovered them in.
2. Build the spine from his language. Cut repetition, and cut anything addressed to you rather than to the reader.
3. Edit grammar lightly where comprehension needs it. Protect coined language, trade slang, genuine asides, mixed feelings, and unusual details. Where a change would alter the thought or erase a distinctive phrase, keep the original or show both.
4. Add your own prose only for a clear job: sourced research, a definition, a factual bridge, or compression. Never write a memory, preference, or experience for him.
5. Leave `[TK: precise question]` where the material is still missing.
6. Report the provenance block, outside the draft.

## Provenance

```txt
Author material:    <which sections or language came from the interview or prior writing>
Model contribution: <research, organization, connective prose, or none>
Open items:         <the [TK] list, or none>
```

Put this in chat, not in the draft file. Do not report a detector score as evidence of authorship. The provenance note describes what actually happened, and that is the claim worth defending.

## Handoff

Output is a draft ready for `workflow-stage-draft --resume-from humanize`, with the provenance block and the open `[TK]` list already assembled. `publish-post` refuses to ship while any `[TK]` is unresolved.
