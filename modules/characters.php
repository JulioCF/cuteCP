<?php
	$query = $mysql->build_query( sprintf( "select `char_num`,`name`,`class`,`base_level`,`job_level`,`zeny`,`last_map` from `char` where `account_id`='%s' order by `char_num` asc", $member[ 'account_id'] ) );
	$query = $mysql->sql_query();
	$quantidade = $mysql->num_rows();
	if( $quantidade ) {
		while( $entry = $mysql->fetch_assoc() ) {
			$entries[] = $entry;
		}
	}
	if( $quantidade ) $tpl->assign( 'dados', $entries );
	$tpl->assign( 'content', 'characters' );
	$tpl->draw( 'home' );
?>