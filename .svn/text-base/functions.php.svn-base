<?php
class Elixir
	{
		function timesince(){
			
			global $post;
			
			$older_date = abs(strtotime($post->post_date_gmt . " GMT"));
			$newer_date = time();
			
			$chunks = array(
			array(60 * 60 * 24 * 365 , 'year'),
			array(60 * 60 * 24 * 30 , 'month'),
			array(60 * 60 * 24 * 7, 'week'),
			array(60 * 60 * 24 , 'day'),
			array(60 * 60 , 'hour'),
			array(60 , 'minute'),
			);

			$newer_date = ($newer_date == false) ? (time()+(60*60*get_settings("gmt_offset"))) : $newer_date;

			$since = $newer_date - $older_date;

			for ($i = 0, $j = count($chunks); $i < $j; $i++) {
				$seconds = $chunks[$i][0];
				$name = $chunks[$i][1];

				if (($count = floor($since / $seconds)) != 0) {
					break;
				}
			}

			$output = ($count == 1) ? '1 '.$name : "$count {$name}s";

			if ($i + 1 < $j) {
				$seconds2 = $chunks[$i + 1][0];
				$name2 = $chunks[$i + 1][1];

				if (($count2 = floor(($since - ($seconds * $count)) / $seconds2)) != 0) {
					$output .= ($count2 == 1) ? ', 1 '.$name2 : ", $count2 {$name2}s";
				}
			}
			
			echo $output;
		}		
	}
	
$elixir = new Elixir();
?>