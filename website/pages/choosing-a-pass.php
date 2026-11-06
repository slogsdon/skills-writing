<?php
/**
 * Reference page: all six skills, when each applies, portability, the voice
 * profile requirement, and verbatim examples from the repository.
 */
$this->layout('partials::layout', [
    'title' => 'Choosing a pass · Writing Skills',
    'description' => 'When to use each of the six Writing Skills, which are reusable and which are Shane-specific, what the voice profile has to supply, and two verbatim examples from the repository.',
    'path' => '/choosing-a-pass/',
    'notFound' => false,
]);
?>
<section class="intro intro--compact" aria-labelledby="pass-title">
    <p class="t-smallcaps">writing skills · choosing a pass</p>
    <h1 id="pass-title">Six skills.<br>One job <span class="t-accent">each.</span></h1>
    <p class="t-lead">Two of them apply a published standard and work on any text. Three
        need a voice profile before they mean anything. One is Shane’s and will not travel.
        This page sorts that out, then shows examples taken verbatim from the repository.</p>
    <p class="t-meta guide-source">Everything below is derived from the skill files and the
        eval cases at the source revision. No skill was run while building this page, so the
        examples are quoted, not reproduced.</p>
</section>

<section class="page-section" aria-labelledby="which-title">
    <header class="index-head">
        <h2 id="which-title" class="t-smallcaps-lg">start with the job</h2>
        <span class="t-dateline">five situations</span>
    </header>
    <div class="table-wrap">
        <table>
            <caption class="t-smallcaps">the draft in front of you, and what it needs</caption>
            <thead>
                <tr><th scope="col">Situation</th><th scope="col">Pass</th><th scope="col">Why that one</th></tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">It reads machine-made and it is going out under your name</th>
                    <td><code>humanize</code></td>
                    <td>Structural and vocabulary edits toward a voice, then a scored gate. Needs a profile.</td>
                </tr>
                <tr>
                    <th scope="row">The voice is right and the terminology is dated or careless</th>
                    <td><code>ms-style-pass</code></td>
                    <td>Term substitutions, bias-free language, and headings only. It will not restructure your sentences.</td>
                </tr>
                <tr>
                    <th scope="row">A reader has to find something and act on it</th>
                    <td><code>plain-language</code></td>
                    <td>Restructures for the reader’s task. The only skill that reorders the document.</td>
                </tr>
                <tr>
                    <th scope="row">A procedure or a warning has to survive translation</th>
                    <td><code>ste100</code></td>
                    <td>Controlled vocabulary and grammar, with sentence-length limits and safety rules.</td>
                </tr>
                <tr>
                    <th scope="row">Something is wrong and you do not yet know what</th>
                    <td><code>writing-review</code></td>
                    <td>Diagnoses and ranks findings, and refuses to hand you a rewrite.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="prose">
        <p>The sixth, <code>writing-interview</code>, is not in that table because it is not an
            edit. It runs before drafting, and it exists to stop an agent from supplying
            material it does not have.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="reusable-title">
    <header class="index-head">
        <h2 id="reusable-title" class="t-smallcaps-lg">reusable, or Shane’s</h2>
        <span class="t-dateline">what travels</span>
    </header>
    <div class="table-wrap">
        <table>
            <caption class="t-smallcaps">portability as written</caption>
            <thead>
                <tr><th scope="col">Skill</th><th scope="col">Portable as it stands</th><th scope="col">What it depends on</th></tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><code>plain-language</code></th>
                    <td>Yes</td>
                    <td>A published standard: ISO 24495-1:2023. Explicitly written not to impose Shane’s voice.</td>
                </tr>
                <tr>
                    <th scope="row"><code>ste100</code></th>
                    <td>Yes</td>
                    <td>A published standard: ASD-STE100. Written for technical documentation, not narrative.</td>
                </tr>
                <tr>
                    <th scope="row"><code>humanize</code></th>
                    <td>With your own profile</td>
                    <td><code>Profiles/voice.md</code>, which wins every disagreement with the skill.</td>
                </tr>
                <tr>
                    <th scope="row"><code>ms-style-pass</code></th>
                    <td>With your own profile</td>
                    <td>The published style guide for terms; a profile for the voice it must not damage.</td>
                </tr>
                <tr>
                    <th scope="row"><code>writing-review</code></th>
                    <td>With your own profile</td>
                    <td>The profile’s hard refusals, which bind the review, and its list of deliberate choices a review must not flag.</td>
                </tr>
                <tr>
                    <th scope="row"><code>writing-interview</code></th>
                    <td>No</td>
                    <td>Shane’s own material: his trigger material, his questions, his vault, and a workflow that refuses to publish with open items.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="prose">
        <p>The split is deliberate rather than accidental. The two standards-based skills earn
            their portability by not caring whose voice the document is in. The three voice
            skills earn it by putting the author’s profile above their own defaults, which is
            the same precedence rule that makes them safe to run on someone else’s draft once
            the profile is theirs.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="detail-title">
    <header class="index-head">
        <h2 id="detail-title" class="t-smallcaps-lg">one at a time</h2>
        <span class="t-dateline">what each refuses</span>
    </header>

    <div class="harness">
        <h3 class="harness__title"><code>humanize</code>, the voice pass</h3>
        <div class="prose">
            <p><strong>Does.</strong> Reads the whole draft, applies structural edits first and
                vocabulary second, then runs a preservation pass, then scores the result
                against a vendored humanizer rubric. A score under 90 sends the passages that
                lost points back for a rewrite and a rescore, at most three times.</p>
            <p><strong>Refuses.</strong> Em-dashes anywhere, in any form. Em-dash lists,
                single-noun colon-reveals, and semicolons between independent clauses.
                “Simply”, “just”, “obviously”, “of course”, and “clearly”. Adding hedges,
                asides, or jokes to look human. Claiming a detector result. Restructuring the
                argument, beyond a flagged reorder inside a paragraph.</p>
            <p><strong>Protects.</strong> Accurate hedges already present, the confessional
                or first-person opener, grounded asides, technical terms that are the right
                word, and a fragment sequence that lands a build-up. Where a deduction lands on
                protected text, the skill keeps the text and records
                <code>kept (−N): reason</code>.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title"><code>ms-style-pass</code>, the terminology pass</h3>
        <div class="prose">
            <p><strong>Does.</strong> Substitutes terms from a Microsoft Writing Style Guide
                list filtered for developer content: blocklist for blacklist, allowlist for
                whitelist, primary and replica for master and slave, soundness check for sanity
                check. Fixes disability metaphors used figuratively, gendered defaults, “email”,
                “internet”, “website”, setup as a noun and set up as a verb, the Oxford comma,
                numerals from 10 up, and sentence-case headings. Adds H2 headings when a draft
                has none and needs them.</p>
            <p><strong>Refuses.</strong> Changes to sentence structure, tone, hedges, or
                inline code. It also refuses scope creep by name: clarity edits belong to
                <code>humanize</code>, and running both in the wrong order makes the second one
                undo the first.</p>
            <p><strong>Judgment calls are reported.</strong> A term that is being discussed
                rather than used (“the old term was blacklist”) stays, and the changelog says
                why.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title"><code>plain-language</code>, the reader’s-task pass</h3>
        <div class="prose">
            <p><strong>Does.</strong> Applies the four governing principles of ISO
                24495-1:2023. Readers get what they need, can understand it, can find it, and
                can use it. Kills nominalisations, fixes ambiguous references, orders
                information the way the reader will use it, and asks for a reader test where
                one is possible. When reviewing, it names the principle, quotes the passage,
                explains the failure in reader terms, and gives a revision.</p>
            <p><strong>Refuses.</strong> To work without a stated audience and purpose. It
                asks first, and it says so: you cannot apply Principle 1 without knowing who
                the readers are and what they need to do. It also refuses to dumb down or to
                strip information the reader needs to act correctly.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title"><code>ste100</code>, the controlled-language pass</h3>
        <div class="prose">
            <p><strong>Does.</strong> Applies ASD-STE100 to procedures, descriptions, and
                safety text. Procedural sentences cap at 20 words and descriptive ones at 25.
                One instruction per sentence. Active voice, simple tenses, no ambiguous
                participles, at most three nouns in a cluster, one topic per paragraph, and
                abbreviations defined at first use.</p>
            <p><strong>Refuses.</strong> To assert that a word is STE-approved when it cannot
                check. The full dictionary is not loaded, so an uncertain word is flagged
                <code>needs verification</code> with a likely substitute. It keeps technical
                names and technical verbs regardless of the word list, and it will not shorten
                a safety warning below the length that keeps it unambiguous.</p>
            <p><strong>Scope.</strong> Do not run it on narrative or marketing copy unless you
                asked for that. It is deliberately austere, and it flattens voice by design.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title"><code>writing-review</code>, the diagnosis</h3>
        <div class="prose">
            <p><strong>Does.</strong> Works down five layers in order: truth and scope,
                substance, development, sentences, craft. Reports a piece-level diagnosis, then
                passage findings, each carrying one of four verdicts: <code>keep</code>,
                <code>revise</code>, <code>ask-author</code>, or <code>cut</code>. Runs five
                tests before naming a finding: substance, flatten, relation, specificity, and
                triad. Closes by collecting the open <code>ask-author</code> questions into one
                list.</p>
            <p><strong>Refuses.</strong> To produce a replacement draft, to edit the file, or
                to stage anything. “This is ready” is a valid outcome, and the skill says so
                explicitly rather than manufacturing findings.</p>
            <p><strong>Ask-author is the load-bearing verdict.</strong> It is the alternative
                to inventing the missing detail, which the skill names as the easiest way to
                damage a draft while believing you improved it.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title"><code>writing-interview</code>, Shane’s skill</h3>
        <div class="prose">
            <p><strong>Why it exists.</strong> The profile’s own rule, as the skill quotes it:
                the voice is portable and the thinking is not. A model can reproduce cadence
                from a profile. It cannot reproduce what the author saw, measured, decided, or
                changed their mind about. So the interview comes first, and drafting waits.</p>
            <p><strong>The hard gate.</strong> No opening paragraph, no outline presented as
                settled, no rough angle to react to. Ask, then wait. For a piece that needs no
                personal material, the skill says it is the wrong tool and hands off rather than
                running the ceremony.</p>
            <p><strong>Shane-specific by construction.</strong> It names him, opens with a
                prompt about what happened that made him want to write the piece, sweeps his
                vault for prior material through the Obsidian CLI, and reports a provenance
                block naming author material, model contribution, and open items. It also
                assumes a publishing workflow that refuses to ship while a <code>[TK]</code>
                is unresolved.</p>
            <p><strong>What travels.</strong> The procedure, if you rewrite the questions for
                your own material and your own sources. The skill as shipped does not, and it
                should not: the value is in interrogating a specific author, not in a generic
                interview ritual.</p>
        </div>
    </div>
</section>

<section class="page-section" aria-labelledby="order-title">
    <header class="index-head">
        <h2 id="order-title" class="t-smallcaps-lg">the order they run in</h2>
        <span class="t-dateline">one sequence</span>
    </header>
    <div class="prose">
        <p>The README gives the sequence its drafting workflow uses, and this site keeps it as
            written: <strong>interview → draft → humanize → ms-style-pass</strong>.
            <code>writing-review</code> sits alongside as the read-only diagnostic and is the
            agent-side input to the copy gate: it reports, the human decides.
            <code>plain-language</code> and <code>ste100</code> are outside that sequence
            because they are not voice passes. Reach for them when the document’s job is
            different, not as extra layers on a personal post.</p>
        <p>The one order that is wrong: style before voice. <code>ms-style-pass</code> says
            outright that it runs after <code>humanize</code> so it can fix terms without
            disturbing structure the voice pass already settled.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="profile-title">
    <header class="index-head">
        <h2 id="profile-title" class="t-smallcaps-lg">what the voice profile has to supply</h2>
        <span class="t-dateline">the requirement</span>
    </header>
    <div class="prose">
        <p>The skills point at <code>Profiles/voice.md</code>. It is not in the repository, it
            is not linked from this site, and its contents are not published here. That is the
            requirement, not an omission: the skills are procedures, and the profile is the
            author’s material.</p>
        <p>From the skill files, four things depend on that file:</p>
        <ul>
            <li><strong>Precedence.</strong> <code>humanize</code> and
                <code>writing-review</code> both state that the profile is authoritative for
                voice and wins where a skill’s defaults disagree. Without a profile, the
                defaults are all that is left, and the defaults describe Shane.</li>
            <li><strong>Hard refusals.</strong> <code>writing-review</code> treats the
                profile’s hard refusals as absolute, so a violation is a finding no matter how
                well it reads. Your profile’s refusals become your review’s floor.</li>
            <li><strong>Deliberate choices.</strong> The same skill lists choices a review must
                not flag: a landing fragment, a confessional opener, a functional proper noun,
                a header carrying the argument. Those come from knowing the author, not from
                the standard.</li>
            <li><strong>No inference.</strong> <code>writing-interview</code> exists because
                the profile forbids generating author-voiced content without grounding in the
                author’s actual thoughts or notes.</li>
        </ul>
        <p>So the practical requirement for reuse is a profile that states your refusals, your
            substitutions, the shapes your prose already takes, and the material an agent may
            not invent on your behalf. A profile that only says “write clearly and vary
            sentence length” gives the pass nothing to prefer, and the skill will fall back to
            Shane’s defaults while believing it followed yours.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="edit-title">
    <header class="index-head">
        <h2 id="edit-title" class="t-smallcaps-lg">a documented edit, verbatim</h2>
        <span class="t-dateline">six rows</span>
    </header>
    <div class="prose">
        <p>These before-and-after rows are copied from the “Example patterns in practice” table
            in <code>skills/humanize/SKILL.md</code>, where they are recorded as drawn from
            actual edits. Nothing is paraphrased and no row is reconstructed.</p>
    </div>
    <div class="table-wrap">
        <table>
            <caption class="t-smallcaps">quoted from humanize/SKILL.md</caption>
            <thead>
                <tr><th scope="col">Original</th><th scope="col">Edited</th><th scope="col">Documented reason</th></tr>
            </thead>
            <tbody>
                <tr>
                    <td><code>What you lose when you defer: auditability</code></td>
                    <td><code>there's one thing you lose when you defer: your ability to audit the work</code></td>
                    <td>Expands a single-noun reveal into a phrase</td>
                </tr>
                <tr>
                    <td><code>It's not a failure; it's the mechanism.</code></td>
                    <td><code>It's not a failure to find gaps here. That's the mechanism you need.</code></td>
                    <td>Semicolon to period; expands the claim</td>
                </tr>
                <tr>
                    <td><code>More specific. More examples. Closer to real use.</code></td>
                    <td><code>More specific, with more examples, and closer to real use.</code></td>
                    <td>Filler fragment sequence to prose. A fragment that lands a build-up stays.</td>
                </tr>
                <tr>
                    <td><code>AX — Agent Experience —</code></td>
                    <td><code>AX (Agent Experience)</code></td>
                    <td>Em-dash definition to parenthetical</td>
                </tr>
                <tr>
                    <td><code>Sharp edge if you try it:</code></td>
                    <td><code>Beware if you try it.</code></td>
                    <td>Coined label plus colon to plain imperative</td>
                </tr>
                <tr>
                    <td><code>system prompt</code>, <code>prompt</code> (on social)</td>
                    <td><code>configuration</code>, <code>context</code></td>
                    <td>Implementation vocabulary to the reader’s vocabulary. Not brevity: “configuration” is the same length.</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="prose">
        <p>Read the fourth row carefully before applying the ban. The skill carries the
            em-dash example as the thing to remove, which is why the table can show one while
            the rule refuses them everywhere. The sixth row is scoped to short-form social in
            the source, and the source records that LinkedIn kept the implementation terms in
            the same batch.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="check-title">
    <header class="index-head">
        <h2 id="check-title" class="t-smallcaps-lg">a reproducible check</h2>
        <span class="t-dateline">two eval cases</span>
    </header>
    <div class="prose">
        <p>The repository’s eval cases record an input and what the skill must do with it.
            Two of them are quoted here from <code>skills/humanize/evals/evals.json</code>, so
            you can run the pass yourself and compare behaviour rather than reading a claim
            about it.</p>
    </div>

    <div class="harness">
        <h3 class="harness__title">Case 1, a filler fragment sequence</h3>
        <div class="prose">
            <p>Input, verbatim:</p>
            <pre><code>Humanize this: "The approach is more specific. More actionable. Closer to the real problem."</code></pre>
            <p>The case expects the three fragments to merge into one sentence with all three
                qualities still present. Its assertions are that the fragments are joined into
                a single sentence rather than left standalone, and that more specific, more
                actionable, and closer to the real problem all survive.</p>
        </div>
    </div>

    <div class="harness">
        <h3 class="harness__title">Case 3, a false positive</h3>
        <div class="prose">
            <p>Input, verbatim:</p>
            <pre><code>Humanize this: "The build finished in 40 minutes. The team shipped it the same day."</code></pre>
            <p>This one fails if the pass over-corrects. The sentences must stay committed, no
                hedge may be introduced (the assertion names so far, with any certainty, about,
                roughly, may, might, could, perhaps, seems, appears, and tends), “not only” must
                not appear, and the first sentence must remain a plain assertion rather than
                being softened to imply uncertainty.</p>
        </div>
    </div>

    <div class="prose">
        <p>Two of the fourteen cases in that file are false-positive cases like the second
            one, and they matter most: over-correction is the failure mode the skill was
            rewritten to prevent.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="omitted-title">
    <header class="index-head">
        <h2 id="omitted-title" class="t-smallcaps-lg">what is not on this page</h2>
        <span class="t-dateline">one omission</span>
    </header>
    <div class="prose">
        <p>A full worked pass, one draft shown before and after the whole humanize sequence, is
            not published here. The repository’s eval cases record prompts and expected
            behaviours, not a verbatim edited draft, so there is no such before-and-after to
            copy. Building one would mean inventing the after, and a fabricated example is
            worse than an absent one.</p>
        <p>What is here instead: the six documented edit rows above, verbatim, and the two eval
            cases you can run against the installed skill. The remaining cases are in
            <code>skills/*/evals/evals.json</code> in the source repository.</p>
    </div>
</section>

<section class="page-section" aria-labelledby="next-title">
    <header class="index-head">
        <h2 id="next-title" class="t-smallcaps-lg">where to go</h2>
        <span class="t-dateline">after choosing</span>
    </header>
    <ul class="link-list">
        <li>
            <a href="/writing-skills/getting-started/">Getting started<span aria-hidden="true"> →</span></a>
            <p>Marketplace installation as the README documents it, and the profile decision
                that comes before any voice pass.</p>
        </li>
        <li>
            <a href="/writing-skills/">Project introduction<span aria-hidden="true"> →</span></a>
            <p>What the plugin is, and what this site does not claim.</p>
        </li>
        <li>
            <a href="https://github.com/slogsdon/skills-writing/tree/main/skills">The six skill files<span aria-hidden="true"> ↗</span></a>
            <p>Each <code>SKILL.md</code> in full, with the references and eval cases beside
                them.</p>
        </li>
    </ul>
</section>
