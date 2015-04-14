<div class="wrap">
	<h2><?php esc_html_e( 'Inquiry data', MWF_Config::DOMAIN ); ?></h2>
	<p>
		<?php esc_html_e( 'You can see the inquiry data that are saved in the database by clicking on the link below.', MWF_Config::DOMAIN ); ?>
	</p>
	<table class="wp-list-table widefat fixed" cellspacing="0">
		<thead>
			<th class="<?php echo MWF_Config::NAME; ?>-table-title"><?php esc_html_e( 'Form title', MWF_Config::DOMAIN ); ?></th>
			<th class="<?php echo MWF_Config::NAME; ?>-table-chart"><?php esc_html_e( 'Display Chart', MWF_Config::DOMAIN ); ?></th>
			<th class="<?php echo MWF_Config::NAME; ?>-table-count"><?php esc_html_e( 'The number of inquiries', MWF_Config::DOMAIN ); ?></th>
			<th class="<?php echo MWF_Config::NAME; ?>-table-date"><?php esc_html_e( 'Updated date', MWF_Config::DOMAIN ); ?></th>
			<th class="<?php echo MWF_Config::NAME; ?>-table-date"><?php esc_html_e( 'Created date', MWF_Config::DOMAIN ); ?></th>
		</thead>
		<tbody>
			<?php $i = 0; foreach ( $form_list as $post_type => $values ) : $i ++; ?>
			<tr <?php if ( $i % 2 == 1 ) echo 'class="alternate"'; ?>>
				<td class="<?php echo MWF_Config::NAME; ?>-table-title"><?php echo esc_html( $values['title'] ) ; ?></td>
				<td class="<?php echo MWF_Config::NAME; ?>-table-chart"><a href="<?php echo admin_url( 'edit.php?post_type=' . MWF_Config::NAME . '&page=' . MWF_Config::NAME . '-chart&formkey=' . $post_type ); ?>"><?php esc_html_e( 'Display Chart', MWF_Config::DOMAIN ); ?></td>
				<td class="<?php echo MWF_Config::NAME; ?>-table-count"><a href="<?php echo admin_url( 'edit.php?post_type=' . $post_type ); ?>"><?php echo esc_html( $values['count'] ) ?> <?php esc_html_e( 'cases', MWF_Config::DOMAIN ); ?></a></td>
				<td class="<?php echo MWF_Config::NAME; ?>-table-date"><?php echo esc_html( $values['modified_datetime'] ); ?></td>
				<td class="<?php echo MWF_Config::NAME; ?>-table-date"><?php echo esc_html( $values['created_datetime'] ); ?></td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
<!-- end .wrap --></div>