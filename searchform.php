<?php
/**
 * Search form
 * Search
 * php version 7.3
 *
 * Template Name: Search Page
 *
 * @category Search
 * @package  Centric
 * @author   Centric Data <projects@centricdata.net>
 * @license  http://www.gnu.org/licenses/gpl-3.0.html GPL
 * @link     http://www.gnu.org/licenses/gpl-3.0.html
 */

?>
<div class="search__container" role=search>
	<form action="/" class="search__form">
		<label for="search">Search</label>
		<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" required>
		<button type="submit"><span class="material-icons">search</span></button>
	</form>
</div>
