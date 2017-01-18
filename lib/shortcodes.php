<?php
/**
 * For embedding the DLF Community Calendar (managed in Google Calendar)
 *
 * @return String embed code for the community calendar. Can be overridden for
 * other Google calendars
 */
function community_calendar( $atts )
{
  $a = shortcode_atts(array(
      'width'       => '800',
      'height'      => '600',
      'src'         => 'g2hval0pee3rmrv4f3n9hp9cok@group.calendar.google.com',
      'bgcolor'     => '#FFFFFF',
      'color'       => '#2F6309',
      'ctz'         => 'America/New_York',
      'frameborder' => 0,
      'scrolling'   => 'no',
      'style'       => 'border-width:0'
  ), $atts);

  $url = 'https://calendar.google.com/calendar/embed?height=' . $a['height'];
  $url .= '&amp;wkst=1&amp;bgcolor=' . urlencode($a['bgcolor']);
  $url .= '&amp;src=' . urlencode($a['src']);
  $url .= '&amp;color=' . urlencode($a['color']) . '&amp;ctz=' . urlencode($a['ctz']);

  $iframe = "<iframe src='{$url}' style='{$a['style']}' width='{$a['width']}' height='{$a['height']}' frameborder='{$a['frameborder']}' scrolling='{$a['scrolling']}'></iframe>";
  $iframe .= "<p style='font-size: smaller;'>Maintained by the <a href='https://www.diglib.org/opportunities/calendar/'>Digital Library Federation</a></p>";
  return $iframe;
}

/**
 * Register shortcodes
 *
 * @return null
 */
function register_shortcodes()
{
  add_shortcode('community_calendar', 'community_calendar');
}

add_action('init', 'register_shortcodes');
