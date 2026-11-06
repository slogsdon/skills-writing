<?php
/**
 * D · Assembly Order: genuinely sequential setup. Step 4 depends on the decision
 * in step 1, and no pass is worth running before step 3 is settled.
 * Each step carries an id so a reader can enter from a link.
 */
$this->layout('partials::layout', [
    'title' => 'Getting started · Writing Skills',
    'description' => 'Install the Writing Skills plugin from the slogsdon-claude-code-config marketplace as the README documents, confirm the six skills, supply a voice profile, and run one pass.',
    'path' => '/getting-started/',
    'notFound' => false,
]);
?>
<section class="intro intro--compact" aria-labelledby="guide-title">
    <p class="t-smallcaps">writing skills · assembly order</p>
    <h1 id="guide-title">Getting <span class="t-accent">started.</span></h1>
    <p class="t-lead">Six steps. Step 1 is a decision rather than an action, because it
        changes what the later steps are worth to you.</p>
    <p class="t-meta guide-source">The installation sentence below is quoted from the
        project README. The scripts are quoted from <code>scripts/README.md</code>. Neither
        was executed while this page was built: no plugin was installed and no draft was
        passed through the skills.</p>
</section>

<div class="assembly">
    <section class="assembly__step" id="step-1" aria-labelledby="step-1-title">
        <span class="assembly__num" aria-hidden="true">01</span>
        <h2 id="step-1-title" class="t-headline-sm">Decide whose voice you are editing toward</h2>
        <div class="prose">
            <p>Three of the skills treat a voice profile as authoritative and defer to it
                wherever their own defaults disagree. That profile,
                <code>Profiles/voice.md</code>, is not in the repository and is not published
                here. It is Shane’s private note.</p>
            <p>So pick one of two paths now, before installing anything:</p>
        </div>
        <div class="table-wrap">
            <table>
                <caption class="t-smallcaps">the decision in step 1</caption>
                <thead>
                    <tr><th scope="col">Path</th><th scope="col">What you get</th><th scope="col">Which skills</th></tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Supply your own profile</th>
                        <td>Point the voice-bound skills at a profile of your own and they
                            edit toward you. The procedure is the reusable part; the profile is
                            the material.</td>
                        <td><code>humanize</code>, <code>ms-style-pass</code>,
                            <code>writing-review</code></td>
                    </tr>
                    <tr>
                        <th scope="row">Skip the profile</th>
                        <td>Use only the skills that apply a published standard, and leave the
                            voice-bound ones alone until you have a profile. Running them blind
                            yields Shane’s voice, not yours.</td>
                        <td><code>plain-language</code>, <code>ste100</code></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="prose">
            <p>Either way, <code>writing-interview</code> stays out. It interviews Shane and
                depends on his own material, so it does not travel. The
                <a href="/writing-skills/choosing-a-pass/">choosing a pass</a> page has the
                per-skill detail.</p>
        </div>
    </section>

    <section class="assembly__step" id="step-2" aria-labelledby="step-2-title">
        <span class="assembly__num" aria-hidden="true">02</span>
        <h2 id="step-2-title" class="t-headline-sm">Install from the marketplace</h2>
        <div class="prose">
            <p>This is the installation instruction the README gives, in full:</p>
            <blockquote>
                <p>Install via the <a href="https://github.com/slogsdon/claude-code-config">slogsdon-claude-code-config
                    marketplace</a>.</p>
            </blockquote>
            <p>That is the whole of it. The project README does not print the marketplace
                commands, so this page does not invent them: add the marketplace and install
                the plugin following the marketplace repository’s own instructions, then come
                back to step 3.</p>
            <p>There is nothing else to install. The skills are Markdown, the two linters are
                Python, and neither the plugin nor this site needs a build step of its own.</p>
        </div>
    </section>

    <section class="assembly__step" id="step-3" aria-labelledby="step-3-title">
        <span class="assembly__num" aria-hidden="true">03</span>
        <h2 id="step-3-title" class="t-headline-sm">Confirm the six skills are there</h2>
        <div class="prose">
            <p>The plugin ships one skill directory per skill, and the plugin manifest
                describes all six. After installation you should be able to see these names in
                your skill listing:</p>
            <pre><code>humanize
ms-style-pass
plain-language
ste100
writing-review
writing-interview</code></pre>
            <p>If a name is missing, the plugin did not install completely. Two skills carry a
                <code>references/</code> file (<code>humanize</code> and
                <code>ms-style-pass</code>). Four carry <code>evals/</code> cases. Neither is
                required for the skill to run.</p>
        </div>
    </section>

    <section class="assembly__step" id="step-4" aria-labelledby="step-4-title">
        <span class="assembly__num" aria-hidden="true">04</span>
        <h2 id="step-4-title" class="t-headline-sm">Put your own voice profile where the skills look</h2>
        <div class="prose">
            <p>Skip this step if you took the second path in step 1. If you took the first,
                write the profile before you run a voice pass, because the pass has nothing
                else to aim at.</p>
            <p>The skills refer to it as <code>Profiles/voice.md</code> and read it when it is
                available. What belongs in that file is your material, not this site’s: rules
                you refuse, substitutions you have made, phrases you never use, and the shapes
                your prose already takes. Expect the profile to win arguments with the skill,
                since that precedence is stated in <code>humanize</code> and
                <code>writing-review</code> alike.</p>
            <p>Two cautions from the skill files, both worth carrying into your own profile.
                <code>humanize</code> insists that existing texture is voice and invented
                texture is performance, so do not ask the profile for hedges, asides, or jokes
                the author never wrote. And <code>writing-review</code> treats a fragment
                sequence that lands a build-up as a deliberate choice, so a profile that bans
                fragments outright will produce reviews that argue with you.</p>
        </div>
    </section>

    <section class="assembly__step" id="step-5" aria-labelledby="step-5-title">
        <span class="assembly__num" aria-hidden="true">05</span>
        <h2 id="step-5-title" class="t-headline-sm">Run one pass on a real draft</h2>
        <div class="prose">
            <p>Each skill loads from its description, so the ask is what matters. These are
                the trigger phrases from the six skill files, quoted:</p>
            <pre><code>humanize            "humanize this", "edit in my voice", "make this sound like me"
ms-style-pass       "ms style pass", "apply the style guide"
plain-language      "make this plain language", "plain language pass"
ste100              "apply STE100 to this", "simplified technical english"
writing-review      "review this", "critique this draft"
writing-interview   "interview me first", "help me write about X"</code></pre>
            <p>Order matters where two passes touch the same draft. The source README states
                that <code>workflow-stage-draft</code> runs them as
                <strong>interview → draft → humanize → ms-style-pass</strong>, with
                <code>writing-review</code> sitting alongside as the read-only diagnostic. Run
                the style pass first and the voice pass after, and you will have edited the
                same sentences twice in the wrong order.</p>
            <p>The two most useful expectations to hold onto: <code>writing-review</code> never
                writes a replacement draft, and <code>writing-interview</code> writes no prose
                until you answer. A run that breaks either one has drifted out of the skill’s
                stated boundary.</p>
        </div>
    </section>

    <section class="assembly__step" id="step-6" aria-labelledby="step-6-title">
        <span class="assembly__num" aria-hidden="true">06</span>
        <h2 id="step-6-title" class="t-headline-sm">Measure the edit, if you want a cross-check</h2>
        <div class="prose">
            <p>Two diagnostic linters sit in <code>scripts/</code>, byte-identical to
                <a href="https://github.com/addyosmani/clarity">addyosmani/clarity</a> and
                deliberately unmodified. From a checkout of the repository:</p>
            <pre><code>python3 scripts/strip_markdown.py draft.md &gt; /tmp/draft.txt
python3 scripts/prose_stats.py /tmp/draft.txt</code></pre>
            <p>Or in one pass:</p>
            <pre><code>python3 scripts/strip_markdown.py draft.md | python3 scripts/prose_stats.py -</code></pre>
            <p>They report sentence-length variation, short-line share, anchor density, hedge
                and booster density, and stock-lexis hits. There is no composite score, and
                <code>scripts/README.md</code> is explicit that this is not a quality gate and
                never an authorship or detector verdict. Measure the same piece before and
                after a pass and compare the two readings.</p>
            <p>To confirm the vendored files are the upstream ones, <code>scripts/README.md</code>
                gives the check:</p>
            <pre><code>shasum -a 256 scripts/*.py</code></pre>
        </div>
    </section>
</div>

<section class="page-section" aria-labelledby="limits-title">
    <header class="index-head">
        <h2 id="limits-title" class="t-smallcaps-lg">what setup does not get you</h2>
        <span class="t-dateline">two limits</span>
    </header>
    <div class="prose">
        <p>The skills edit, apply a standard, diagnose, or ask. None of them verify a fact,
            and <code>humanize</code> is explicit that when a better sentence needs a fact,
            number, or experience only the author has, it leaves a <code>[TK: your question]</code>
            marker rather than writing plausible filler. Treat every <code>[TK]</code> as
            work you still owe the draft.</p>
        <p>The scoring gate in <code>humanize</code> is a pattern checklist with a threshold
            of 90, not a claim about how text is received. A deduction on protected text (an
            accurate hedge, a landing fragment, a required technical term, the actual ask in a
            message) is kept and reported as <code>kept (−N): reason</code>. If the final score
            is under 90 because items were kept, the skill reports the real number.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="next-title">
    <header class="index-head">
        <h2 id="next-title" class="t-smallcaps-lg">where to go</h2>
        <span class="t-dateline">after setup</span>
    </header>
    <ul class="link-list">
        <li>
            <a href="/writing-skills/choosing-a-pass/">Choosing a pass<span aria-hidden="true"> →</span></a>
            <p>What each of the six does, when it applies, and which parts travel to another
                author.</p>
        </li>
        <li>
            <a href="/writing-skills/">Project introduction<span aria-hidden="true"> →</span></a>
            <p>What the plugin is, and what this site does not claim about it.</p>
        </li>
        <li>
            <a href="https://github.com/slogsdon/skills-writing">Source on GitHub<span aria-hidden="true"> ↗</span></a>
            <p>The README, the changelog, the six skill files, the references, and the eval
                cases.</p>
        </li>
    </ul>
</section>
