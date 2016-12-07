<?php $this->layout('layout', ['title' => 'Connection']) ?>

<?php $this->start('main_content') ?>

    <h2>Connectez-vous</h2>

    <?php var_dump($w_user); ?>

    <?php if($w_user!==null) : ?>
        <?php echo "Vous êtes déjà connecté" ?>
    <?php else: ?>
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
    <?php endif; ?>

<?php $this->stop('main_content') ?>

<?php
