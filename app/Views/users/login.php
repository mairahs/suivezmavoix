<?php $this->layout('layout', ['title' => 'Connection']) ?>

<?php $this->start('main_content') ?>
	<main>
        <h2>Connectez-vous</h2>

        <?php echo "<p>" . $fmsg->display() . "</p>"; ?>
        <form action="<?php $this->url('login') ?>" method="POST">
        	<p>
        		<label for="email">
        			Adresse e-mail :
        		</label>
        		<input type="text" name="email" id="email" value="<?php echo isset($datas['email']) ? $datas['email'] : '' ?>"/>
        	</p>
        	<p>
        		<label for="password">
        			Mot de passe :
        		</label>
        		<input type="password" name="password" id="password" />
        	</p>
        	<p>
        		<input type="submit" class="button" value="Me connecter"/>
        	</p>

        </form>
	</main>
<?php $this->stop('main_content') ?>

<?php
