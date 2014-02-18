<?
//
//---------------------------------
//	LAST.FM
//---------------------------------
//
function printLastfm() {

?>

			<section class="bg-light lastfm">
				<div class="container">
					<div class="grid">
						<div class="col-1-2 centred">
							<h2>
								Music
							</h2>
							<p>
								I listen to music all the time, particularly prog rock, prog metal, post-rock and lately ambient music (which is great to work to).
							</p>
							<p>
								I'm perfectly happy if there are no vocals, and some of my favourite bands are instrumental.
							</p>
						</div>
					</div>
					<div class="grid">
						<div class="col-5-6 centred">
							<h3>
								My favourite artists <small>Scrobbled on last.fm since May 2005</small>
							</h3>
							<nav class="tabs">
								<ul>
									<li class="current">
										<a href="javascript:void(0);" class="overall">
											Overall
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-12-months">
											Last year
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-3-months">
											Last 3 months
										</a>
									</li>
									<li>
										<a href="javascript:void(0);" class="last-7-days">
											Last week
										</a>
									</li>
								</ul>
							</nav>
							<table>
								<thead>
									<tr>
										<th class="rank">
											#
										</th>
										<th class="artist">
											Artist
										</th>
										<th class="plays">
											Plays
										</th>
									</tr>
								</thead>

								<tbody>
									<!-- jQuery spits out top last.fm artists here. -->
									<!--
									<tr>
										<td class="rank">
											1
										</td>
										<td class="artist">
											Oceansize
										</td>
										<td>
											2,708
										</td>
									</tr>
									-->
								</tbody>
							</table>
							<small><a href="http://last.fm/user/elgyn2">My full last.fm charts</a></small>
						</div>
					</div><!-- .grid -->
				</div><!-- .container -->
			</section>

<?
}		// End of printLastfm()
?>