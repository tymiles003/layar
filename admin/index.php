<?php include 'layout/header.php'; ?>
<?php include 'include/function.php';
$rawPois = getPois();
$rawActions = getActions();
$rawIcons = getIcons();?>
	<section>
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-10 col-centered">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Points d'intérêts</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>ID</th>
								<th>Titre</th>
								<th>Description</th>
								<th>Foot Note</th>
								<th>Latitude</th>
								<th>Longitude</th>
								<th>Icone</th>
								<th>Objet</th>
								<th>Transform</th>
								<th></th>
								<th></th>
							</tr>
							<?php foreach($rawPois as $poi){ ?>
							<tr <?php echo(!$poi['active'])?'class="not-active"':''; ?>>
								<td><?php echo $poi['id']; ?></td>
								<td><?php echo $poi['title']; ?></td>
								<td><?php echo $poi['description']; ?></td>
								<td><?php echo $poi['footnote']; ?></td>
								<td><?php echo $poi['lat']; ?></td>
								<td><?php echo $poi['lon']; ?></td>
								<td><?php echo $poi['iconID']; ?></td>
								<td><?php echo $poi['objectID']; ?></td>
								<td><?php echo $poi['transformID']; ?></td>
								<td><a href="/admin/views/formpoi.php?action=modifier&id=<?php echo $poi['id']; ?>">Modifier</a></td>
								<?php if($poi['active']){ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $poi['id']; ?>&table=POI&action=desactiver">Désactiver</a></td>
								<?php }else{ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $poi['id']; ?>&table=POI&action=activer">Activer</a></td>
								<?php } ?>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-10 col-centered">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Actions</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>ID Poi</th>
								<th>Label</th>
								<th>Uri</th>
								<th>Type contenu</th>
								<th>Méthode</th>
								<th>Paramètres</th>
								<th></th>
								<th></th>
							</tr>
							<?php foreach($rawActions as $action){ ?>
							<tr <?php echo(!$action['active'])?'class="not-active"':''; ?>>
								<td><?php echo $action['poiID']; ?></td>
								<td><?php echo $action['label']; ?></td>
								<td><?php echo $action['uri']; ?></td>
								<td><?php echo $action['contentType']; ?></td>
								<td><?php echo $action['method']; ?></td>
								<td><?php echo $action['params']; ?></td>
								<td><a href="/views/formaction.php?action=modifier&id=<?php echo $action['id']; ?>">Modifier</a></td>
								<?php if($action['active']){ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $action['id']; ?>&table=POIAction&action=desactiver">Désactiver</a></td>
								<?php }else{ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $action['id']; ?>&table=POIAction&action=activer">Activer</a></td>
								<?php } ?>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="row row-centered">
			<div class="col-xs-12 col-sm-10 col-centered">
				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Icônes</h3>
					</div>
					<div class="box-body table-responsive no-padding">
						<table class="table table-hover">
							<tr>
								<th>Url</th>
								<th>Type</th>
								<th></th>
								<th></th>
							</tr>
							<?php foreach($rawIcons as $icon){ ?>
							<tr <?php echo(!$icon['active'])?'class="not-active"':''; ?>>
								<td><?php echo $icon['url']; ?></td>
								<td><?php echo $icon['type']; ?></td>
								<td><a href="/views/formicon.php?action=modifier&id=<?php echo $icon['id']; ?>">Modifier</a></td>
								<?php if($icon['active']){ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $icon['id']; ?>&table=Icon&action=desactiver">Désactiver</a></td>
								<?php }else{ ?>
								<td><a href="/include/supprimer.php?id=<?php echo $icon['id']; ?>&table=Icon&action=activer">Activer</a></td>
								<?php } ?>
							</tr>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>