<?php /*

**************************************************************************

Plugin Name:  Templatedia Chess
Plugin URI:   http://www.viper007bond.com/wordpress-plugins/templatedia/
Version:      1.0.0
Description:  Creates a new template in <a href="http://www.viper007bond.com/wordpress-plugins/templatedia/">Templatedia</a> for displaying chess moves. See the <a href="http://en.wikipedia.org/wiki/Template_talk:Chess_diagram#Syntax">Wikipedia original</a> for usage instructions.
Author:       Viper007Bond
Author URI:   http://www.viper007bond.com/

**************************************************************************

Besides the obvious purpose of this plugin, it is also designed to be an
example of how to add a new template to Templatedia via a plugin.

**************************************************************************/

add_filter( 'templatedia_templates', 'templatedia_chess_templates' );
add_filter( 'templatedia_variables', 'templatedia_chess_variables' );


// This function accepts an array (the current templates), adds a new template to it, and then returns the modified array
// Please note that the template stub MUST BE IN ALL LOWERCASE!
function templatedia_chess_templates( $templates ) {
	$templates['chess diagram'] = array(
		'description' => 'Template for displaying chess moves. See the <a href="http://en.wikipedia.org/wiki/Template_talk:Chess_diagram#Syntax">Wikipedia original</a> for usage instructions.',
		'template' => '</p><div class="{{{1}}}" style="width: 268px; padding-top: 6px; padding-bottom: 10px">
	<div class="{{{1}}}" style="width: 252px; text-align: center">
		{{{2}}}
		<table style="border:1px solid #b0b0b0; background-color:#f9f9f9">
			<tr>
				<td>
					<table cellpadding="0" cellspacing="0" style="border: 1px solid #b0b0b0">
						<tr>
							<td colspan="3"><img src="{{CHESSIMAGESURL}}abcdefgh.png" alt="abcdefgh" width="242" height="18" /></td>
						</tr>
						<tr>
						<td><img src="{{CHESSIMAGESURL}}87654321.png" alt="87654321" width="16" height="210" /></td>
						<td>
							<table cellspacing="0" cellpadding="0" style="border: 1px solid #b0b0b0; background-color: #ffce9e">
								<tr>
									<td><img alt="a8" src="{{CHESSIMAGESURL}}{{{3|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="b8" src="{{CHESSIMAGESURL}}{{{4|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="c8" src="{{CHESSIMAGESURL}}{{{5|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="d8" src="{{CHESSIMAGESURL}}{{{6|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="e8" src="{{CHESSIMAGESURL}}{{{7|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="f8" src="{{CHESSIMAGESURL}}{{{8|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="g8" src="{{CHESSIMAGESURL}}{{{9|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="h8" src="{{CHESSIMAGESURL}}{{{10|blank}}}_d.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a7" src="{{CHESSIMAGESURL}}{{{11|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="b7" src="{{CHESSIMAGESURL}}{{{12|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="c7" src="{{CHESSIMAGESURL}}{{{13|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="d7" src="{{CHESSIMAGESURL}}{{{14|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="e7" src="{{CHESSIMAGESURL}}{{{15|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="f7" src="{{CHESSIMAGESURL}}{{{16|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="g7" src="{{CHESSIMAGESURL}}{{{17|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="h7" src="{{CHESSIMAGESURL}}{{{18|blank}}}_l.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a6" src="{{CHESSIMAGESURL}}{{{19|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="b6" src="{{CHESSIMAGESURL}}{{{20|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="c6" src="{{CHESSIMAGESURL}}{{{21|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="d6" src="{{CHESSIMAGESURL}}{{{22|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="e6" src="{{CHESSIMAGESURL}}{{{23|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="f6" src="{{CHESSIMAGESURL}}{{{24|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="g6" src="{{CHESSIMAGESURL}}{{{25|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="h6" src="{{CHESSIMAGESURL}}{{{26|blank}}}_d.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a5" src="{{CHESSIMAGESURL}}{{{27|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="b5" src="{{CHESSIMAGESURL}}{{{28|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="c5" src="{{CHESSIMAGESURL}}{{{29|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="d5" src="{{CHESSIMAGESURL}}{{{30|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="e5" src="{{CHESSIMAGESURL}}{{{31|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="f5" src="{{CHESSIMAGESURL}}{{{32|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="g5" src="{{CHESSIMAGESURL}}{{{33|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="h5" src="{{CHESSIMAGESURL}}{{{34|blank}}}_l.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a4" src="{{CHESSIMAGESURL}}{{{35|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="b4" src="{{CHESSIMAGESURL}}{{{36|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="c4" src="{{CHESSIMAGESURL}}{{{37|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="d4" src="{{CHESSIMAGESURL}}{{{38|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="e4" src="{{CHESSIMAGESURL}}{{{39|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="f4" src="{{CHESSIMAGESURL}}{{{40|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="g4" src="{{CHESSIMAGESURL}}{{{41|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="h4" src="{{CHESSIMAGESURL}}{{{42|blank}}}_d.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a3" src="{{CHESSIMAGESURL}}{{{43|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="b3" src="{{CHESSIMAGESURL}}{{{44|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="c3" src="{{CHESSIMAGESURL}}{{{45|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="d3" src="{{CHESSIMAGESURL}}{{{46|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="e3" src="{{CHESSIMAGESURL}}{{{47|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="f3" src="{{CHESSIMAGESURL}}{{{48|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="g3" src="{{CHESSIMAGESURL}}{{{49|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="h3" src="{{CHESSIMAGESURL}}{{{50|blank}}}_l.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a2" src="{{CHESSIMAGESURL}}{{{51|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="b2" src="{{CHESSIMAGESURL}}{{{52|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="c2" src="{{CHESSIMAGESURL}}{{{53|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="d2" src="{{CHESSIMAGESURL}}{{{54|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="e2" src="{{CHESSIMAGESURL}}{{{55|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="f2" src="{{CHESSIMAGESURL}}{{{56|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="g2" src="{{CHESSIMAGESURL}}{{{57|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="h2" src="{{CHESSIMAGESURL}}{{{58|blank}}}_d.png" width="26" height="26" /></td>
								</tr>
								<tr>
									<td><img alt="a1" src="{{CHESSIMAGESURL}}{{{59|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="b1" src="{{CHESSIMAGESURL}}{{{60|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="c1" src="{{CHESSIMAGESURL}}{{{61|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="d1" src="{{CHESSIMAGESURL}}{{{62|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="e1" src="{{CHESSIMAGESURL}}{{{63|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="f1" src="{{CHESSIMAGESURL}}{{{64|blank}}}_l.png" width="26" height="26" /></td>
									<td><img alt="g1" src="{{CHESSIMAGESURL}}{{{65|blank}}}_d.png" width="26" height="26" /></td>
									<td><img alt="h1" src="{{CHESSIMAGESURL}}{{{66|blank}}}_l.png" width="26" height="26" /></td>
								</tr>
							</table>
						</td>
						<td><img src="{{CHESSIMAGESURL}}87654321.png" alt="87654321" width="16" height="210" /></td>
					</tr>
					<tr>
						<td colspan="3"><img src="{{CHESSIMAGESURL}}abcdefgh.png" alt="abcdefgh" width="242" height="18" /></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="line-height: 1.4; text-align: left; font-size: 90%; padding: 2px">{{{67}}}</td>
		</tr>
		</table>
	</div>
</div><p>',
	);

	return $templates;
}


// This function accepts an array (the current variables), adds a new variable to it, and then returns the modified array
function templatedia_chess_variables( $variables ) {
	global $Templatedia;

	// Load up the localization file if we're using WordPress in a different language
	// Place it in Templatedia's "localization" folder and name it "templatedia-[value in wp-config].mo"
	load_plugin_textdomain('templatedia', $Templatedia->folder . '/localization');

	$variables['CHESSIMAGESURL'] = array(
		'output' => get_bloginfo('wpurl') . '/wp-content/plugins/templatedia-chess/images/',
		'description' => __('<em>This variable is used internally for the chess template</em>', 'templatedia')
	);

	// Return the new variables array
	return $variables;
}

?>