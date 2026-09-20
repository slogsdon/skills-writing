> **[shane.logsdon.io](https://shane.logsdon.io)** — writing and projects on agentic workflows, web standards, and payments engineering.

# skills-writing

Writing quality and style skills for Claude Code. Six skills covering voice, house style, plain language, controlled technical English, grounded interviewing, and review.

Install via the [slogsdon-claude-code-config marketplace](https://github.com/slogsdon/claude-code-config).

## Skills

- **humanize** — Rewrites AI-sounding text into natural human voice
- **ms-style-pass** — Applies Microsoft Writing Style Guide term, bias, and heading conventions
- **plain-language** — Applies ISO 24495-1 plain language principles
- **ste100** — Applies ASD-STE100 Simplified Technical English to technical documentation
- **writing-review** — Diagnoses a draft and reports ranked findings without rewriting it
- **writing-interview** — Interviews Shane before drafting, so the piece is built from his own material

## How they fit together

`workflow-stage-draft` runs these in order: **interview → draft → humanize → ms-style-pass**. `writing-review` sits alongside as the read-only diagnostic and is the agent-side input to the copy gate: it reports, the human decides.

`Profiles/voice.md` is authoritative for voice across every skill here. Where a skill's defaults and that profile disagree, the profile wins.

## Scripts

`scripts/` holds two diagnostic linters vendored byte-identical from [addyosmani/clarity](https://github.com/addyosmani/clarity) (MIT): `strip_markdown.py` reduces a draft to the prose a reader actually reads, and `prose_stats.py` reports cadence, hedge/booster density, anchor density, and stock-lexis hits. **No composite score, by design** — see `scripts/README.md` for why and for how to read the numbers.

## License

MIT — see [LICENSE](LICENSE).
