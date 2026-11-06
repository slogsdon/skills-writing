<?php
/**
 * F · Frontispiece: the single entry point to this project's set.
 * It names the work, states the problem, and indexes what follows.
 * No figure: a frontispiece carries no argument.
 */
$this->layout('partials::layout', [
    'title' => 'Writing Skills · six passes over a draft',
    'description' => 'Six Claude Code writing skills: a voice edit, Microsoft style, plain language, simplified technical English, a read-only review, and a pre-draft interview. Five are reusable with your own voice profile.',
    'path' => '/',
    'notFound' => false,
]);
?>
<section class="intro" aria-labelledby="project-title">
    <p class="t-smallcaps">shane logsdon · claude code plugin</p>
    <h1 id="project-title">Six passes over a draft.<br>One of them is <span class="t-accent">mine.</span></h1>
    <p class="t-lead">A Claude Code plugin of six writing skills, each with one job: edit a
        draft into a specific voice, apply a named style standard, diagnose without
        rewriting, or interview the author before anything is written. Five of the six work
        for anyone who supplies a voice profile. The sixth is built around Shane’s own
        material and does not.</p>
    <a class="btn-arrow" href="/writing-skills/getting-started/">Install from the marketplace</a>
</section>

<section class="page-section" aria-labelledby="what-title">
    <header class="index-head">
        <h2 id="what-title" class="t-smallcaps-lg">what a skill is here</h2>
        <span class="t-dateline">markdown, not a runtime</span>
    </header>
    <div class="prose">
        <p>Each skill is a directory under <code>skills/</code> holding a <code>SKILL.md</code>
            with YAML front matter: a name, a description that tells the agent when to reach
            for it, and the instructions that follow. Two skills carry a
            <code>references/</code> file they read (the humanizer rubric, and the Microsoft
            term substitutions). Four carry <code>evals/</code> cases. Nothing is compiled,
            and there is no service to run.</p>
        <p>That shape is the whole design. The description is the trigger surface, so the
            skill loads when a draft is in front of the agent, and the body is the procedure
            it follows once loaded.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="six-title">
    <header class="index-head">
        <h2 id="six-title" class="t-smallcaps-lg">the six</h2>
        <span class="t-dateline">one job each</span>
    </header>
    <div class="prose">
        <dl class="facts">
            <div class="fact">
                <dt><code>humanize</code></dt>
                <dd>Edits a draft into Shane’s voice, then scores it against the vendored
                    humanizer rubric. The voice pass, not a general clarity edit.</dd>
            </div>
            <div class="fact">
                <dt><code>ms-style-pass</code></dt>
                <dd>Applies Microsoft Writing Style Guide term preferences, bias-free language,
                    and heading conventions. Runs after <code>humanize</code>.</dd>
            </div>
            <div class="fact">
                <dt><code>plain-language</code></dt>
                <dd>Applies ISO 24495-1:2023. Restructures a document for a reader’s task,
                    which is a different job from editing its sentences.</dd>
            </div>
            <div class="fact">
                <dt><code>ste100</code></dt>
                <dd>Applies ASD-STE100 Simplified Technical English to procedures,
                    descriptions, and safety text. Deliberately austere.</dd>
            </div>
            <div class="fact">
                <dt><code>writing-review</code></dt>
                <dd>Diagnoses a draft and ranks the findings under
                    <code>keep</code>, <code>revise</code>, <code>ask-author</code>, and
                    <code>cut</code>. Never produces a replacement draft.</dd>
            </div>
            <div class="fact">
                <dt><code>writing-interview</code></dt>
                <dd>Interviews the author before drafting and writes no prose until the
                    answers arrive. Written for Shane, and not portable as it stands.</dd>
            </div>
        </dl>
        <p><a href="/writing-skills/choosing-a-pass/">Choosing a pass</a> covers when to reach
            for which one, and which of them need a voice profile before they do anything
            useful.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="profile-title">
    <header class="index-head">
        <h2 id="profile-title" class="t-smallcaps-lg">what “my voice” means here</h2>
        <span class="t-dateline">the portable part</span>
    </header>
    <div class="prose">
        <p>The source README states the rule plainly: <code>Profiles/voice.md</code> is
            authoritative for voice across every skill here, and where a skill’s defaults and
            that profile disagree, the profile wins. That file is not in the repository. It is
            a private note, and it is not published on this site.</p>
        <p>So the reusable part is the procedure: the structural edits, the precedence rule
            that protects an author’s earned choices, the pass order, the review vocabulary
            that refuses to rewrite. The profile is the material. Bring your own, and
            <code>humanize</code>, <code>ms-style-pass</code>, and <code>writing-review</code>
            become yours. Run them without one and they will still edit, but the voice they
            converge on is Shane’s, not yours.</p>
        <p>Two skills sit outside that rule on purpose. <code>plain-language</code> and
            <code>ste100</code> apply a published standard to text that often is not the
            author’s personal voice at all, and both say so in their own instructions.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="status-title">
    <header class="index-head">
        <h2 id="status-title" class="t-smallcaps-lg">status</h2>
        <span class="t-dateline">0.5.0</span>
    </header>
    <div class="prose">
        <p>Version 0.5.0, dated 2026-10-19, MIT licensed, distributed through the
            <a href="https://github.com/slogsdon/claude-code-config">slogsdon-claude-code-config
            marketplace</a>. The changelog is public and worth reading before you rely on a
            pass: 0.3.0 removed an enrichment step that was inventing hedges, 0.4.0 added two
            register rules taken from hand edits, and 0.5.0 added the scoring gate.</p>
        <p>Two diagnostics ship alongside the skills in <code>scripts/</code>, vendored
            byte-identical from <a href="https://github.com/addyosmani/clarity">addyosmani/clarity</a>
            (MIT). They report cadence, hedge and booster density, anchor density, and
            stock-lexis hits. There is no composite score, by design. The upstream project
            found its own stylometric composite came out inverted, so a single number here
            would invite optimising toward the machine register.</p>
        <p>This site publishes no voice measurements, no baseline figures, and no detector
            claim in either direction. Nothing here asserts that a pass makes text pass a
            detector, and the skills do not promise it.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="next-title">
    <header class="index-head">
        <h2 id="next-title" class="t-smallcaps-lg">where to go</h2>
        <span class="t-dateline">003 entries</span>
    </header>
    <ul class="link-list">
        <li>
            <a href="/writing-skills/getting-started/">Getting started<span aria-hidden="true"> →</span></a>
            <p>Marketplace installation as the README documents it, the six skill names to
                look for afterwards, and the voice-profile decision you have to make first.</p>
        </li>
        <li>
            <a href="/writing-skills/choosing-a-pass/">Choosing a pass<span aria-hidden="true"> →</span></a>
            <p>All six skills, when each one applies, which are reusable and which are
                Shane’s, plus a documented edit and a reproducible check taken from the
                repository.</p>
        </li>
        <li>
            <a href="https://github.com/slogsdon/skills-writing">Source on GitHub<span aria-hidden="true"> ↗</span></a>
            <p>The six skills, the two vendored linters, the rubric and term references, and
                every eval case.</p>
        </li>
    </ul>
</section>
