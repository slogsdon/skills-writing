---
name: ste100
description: >
  Apply ASD-STE100 Simplified Technical English (STE) — the aerospace and defense controlled-language standard — to technical writing: procedures, descriptions, maintenance records, and safety warnings. Use when Shane says: "apply STE100 to this", "apply STE to this", "simplified technical english", "make this STE-compliant", "review for ASD-STE100", "STE check this", "rewrite this as a procedure in STE". Also invoke proactively when reviewing step-by-step instructions, work cards, or safety-critical warnings that must be unambiguous for a non-native-English reader.
---

# ASD-STE100 (Simplified Technical English)

ASD-STE100 (formerly AECMA Simplified English) is a controlled-language standard for technical documentation. It exists so that a procedure written by one person is understood the same way by every reader — including non-native English speakers and, increasingly, machine translation.

Two things are controlled: **vocabulary** (which words you may use and what each means) and **grammar/style** (how you build sentences). Apply both.

## Vocabulary control

- Use only STE-approved words with their approved meanings. When you flag an unapproved word, suggest an approved substitute in the same context.
- **One word = one meaning.** A word listed with an approved part of speech and sense must be used only that way. Do not use a word that carries multiple meanings unless STE explicitly permits the sense you need. Example: "follow" is approved only in the sense of "come after" — for "obey the instructions," use "obey."
- **Technical names and technical verbs are always permitted.** Part names, system names, tool names, materials, and standardized technical verbs (e.g., "solder," "drill") are nouns/verbs you keep even if not in the general dictionary. Name the thing; don't paraphrase it.
- Prefer the approved short form of a concept over a longer or figurative one ("use," not "utilize"; "start," not "initiate").

You do not have the full ~900-word dictionary loaded here. When you cannot verify a word's approval status, flag it as **needs verification** rather than asserting it is approved — say which sense you intend and offer the most likely approved substitute.

## Writing rules

These are the highest-value rules. Apply them in order of impact.

1. **Sentence length.** Procedural (step) sentences: **maximum 20 words.** Descriptive sentences: **maximum 25 words.** Count and split anything over.
2. **One instruction per sentence** in procedures. If a step contains two actions ("Remove the panel and disconnect the cable"), split it into two steps — unless the two actions are done together as one operation, in which case say so explicitly.
3. **Active voice.** Use it by default. Passive is permitted only when the agent is unknown or genuinely irrelevant (e.g., "The unit is calibrated at the factory").
4. **Simple verb tenses.** Simple present for descriptions. Imperative for procedures ("Open the valve"). Simple past for maintenance records ("Replaced the filter"). No perfect/continuous/conditional stacks.
5. **No ambiguous participles.** Avoid `-ing` and `-ed` participle phrases that a reader could parse either as a modifier or as the main verb. "The pump running at full speed is hot" → "The pump is hot when it runs at full speed."
6. **Subject–verb agreement, and short noun clusters.** Every verb agrees with its subject. **Maximum 3 nouns in a cluster** — break up strings like "main engine fuel supply shutoff valve" ("the shutoff valve for the main-engine fuel supply").
7. **Write positively.** Prefer "Use X" over "Do not use Y" — *except* for safety, where a prohibition must be stated explicitly and directly.
8. **Paragraphs: one topic each, maximum 6 sentences.** One idea per paragraph. Start with a topic sentence.
9. **Define abbreviations and acronyms at first use** in the document. Spell out, then give the abbreviation in parentheses. After that, use the abbreviation consistently.

## Safety warnings

STE treats safety language as the highest-stakes text in the document. Give it extra scrutiny.

- Distinguish the three levels correctly: **WARNING** (risk of injury or death to people), **CAUTION** (risk of damage to equipment), **NOTE** (important information, no hazard).
- A warning must state the hazard **and** the action, unambiguously. "Do not touch the terminal" is weak; "WARNING: High voltage. Do not touch the terminal. You can get an electric shock." names hazard, prohibition, and consequence.
- Put the warning **before** the step it protects, never after.
- Every safety statement must survive rule 5 (no ambiguous participles) and rule 1 (length) — but never sacrifice explicitness to hit a word count. If a warning needs 22 words to be unambiguous, keep 22 and flag it.

## Behavior

**Reviewing or rewriting supplied text** — return, in this order:

1. **Corrected version.** STE-compliant text, ready to use.
2. **Changes made.** A short list; for each change name the rule number it satisfies.

```
**STE changes:**
- Split a 31-word step into two steps (rule 1, rule 2)
- "utilize" → "use" (vocabulary: approved short form)
- Passive "the bolt should be tightened" → "Tighten the bolt" (rule 3, rule 4)
- Noun cluster "engine fuel supply line" kept — 3 nouns, at the limit (rule 6)
- "actuate" flagged — needs verification against the STE dictionary; likely "operate" or "start"
- WARNING moved above the step it protects; added the consequence clause (safety)
```

**Drafting new content** — produce STE-compliant text directly. State whether the content is procedural (20-word limit) or descriptive (25-word limit) so the reader knows which constraint applied.

**Always** call out safety statements (WARNING / CAUTION / NOTE) that need STE attention, separately from ordinary changes — safety language must be the most unambiguous text in the document.

## What not to do

- Don't assert a word is STE-approved when you cannot verify it — flag it instead.
- Don't strip a technical name or technical verb to satisfy vocabulary control; those are always permitted.
- Don't shorten a safety warning below the length needed to stay unambiguous.
- Don't apply STE to prose that isn't technical documentation (marketing copy, narrative) unless Shane explicitly asks — STE is deliberately austere and will flatten voice.
