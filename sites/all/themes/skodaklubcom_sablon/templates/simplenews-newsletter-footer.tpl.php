<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 *
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--[tid].tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * @todo Update the available variables.
 * Available variables:
 * - $build: Array as expected by render()
 * - $build['#node']: The $node object
 * - $language: language code
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 * - $simplenews_theme: path to the configured simplenews theme
 *
 * Available tokens:
 * - [simplenews-subscriber:unsubscribe-url]: unsubscribe url to be used as link
 *
 * Other available tokens can be found on the node edit form when token.module
 * is installed.
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 */
$unsubscribe_text="erre a címre";
?>
<?php if (!$opt_out_hidden): ?>
  <?php if ($format == 'html'): ?>
    <div id="footer">
        <p>Ezt a levelet azért kaptad, mert feliratkoztál a Skodaklub hírlevelére. Terveink szerint havonta küldünk Neked infókat tevékenységünkről, szervezetünkről, kampányainkról, hogy első kézből tájékozódhass.
        Emellett követhetsz minket a <a href="https://facebook.com/Skodaklub.Hungary" target="_blank">Facebook oldalunkon</a> és <a href="node" target="_blank">honlapunkon</a>. Régebbi leveleinket megtalálod a <a href="hirlevelek/skodaklubcom-klublevelek">hírlevél arhívumban</a>.
        Amennyiben nem szeretnél a jövőben hírlevelet kapni tőlünk, <a href="[simplenews-subscriber:unsubscribe-url]"><?php print $unsubscribe_text ?></a> kattintva iratkozhatsz le.</p>
        <p>Copyright &copy; 2006-2015 Felicia Racing Kft.<br/>Minden jog fenntartva! / All Rights Reserved!</p>
    </div>
  </div>
</div>
  <?php else: ?>
  -- <?php print $unsubscribe_text ?>: [simplenews-subscriber:unsubscribe-url]
  <?php endif ?>
<?php endif; ?>

<?php if ($key == 'test'): ?>
- - - <?php print $test_message ?> - - -
<?php endif ?>
