<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
</footer>

<?php View::element('footer_required'); ?>

<?php
$u = new User;
if(!$u->isLoggedIn() || $u->isLoggedIn() && !$u->superUser) : ?>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<?php endif; ?>
<script type="text/javascript" src="<?php echo $this->getThemePath(); ?>/js/app.js"></script>
</div>
</body>
</html>