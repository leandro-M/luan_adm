<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Luan Rodrigues - Administrativo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('css-default/bootstrap.min');

        echo $this->Html->css('../libs/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('../libs/ionicon/css/ionicons.min.css');
        echo $this->Html->css('css-default/material-design-iconic-font.min.css');

        echo $this->Html->css('css-default/animate');
        echo $this->Html->css('css-default/waves-effect');

        echo $this->Html->css('../libs/sweet-alert/sweet-alert.min');
        echo $this->Html->css('../libs/tagsinput/jquery.tagsinput');
        echo $this->Html->css('../libs/toggles/toggles');
        echo $this->Html->css('../libs/timepicker/bootstrap-timepicker.min');
        echo $this->Html->css('../libs/timepicker/bootstrap-datepicker.min');
        echo $this->Html->css('../libs/colorpicker/colorpicker');
        echo $this->Html->css('../libs/jquery-multi-select/multi-select');
        echo $this->Html->css('../libs/select2/select2');
        echo $this->Html->css('../libs/nestable/jquery.nestable');
        echo $this->Html->css('../libs/summernote/summernote');
        echo $this->Html->css('../libs/modal-effect/css/component');
        echo $this->Html->css('../libs/bootstrap3-editable/bootstrap-editable');

        echo $this->Html->css('css-default/helper');
        echo $this->Html->css('css-default/style');

        echo $this->Html->css('main');

        echo $this->Html->script('js-default/jquery-1.12.0.min');
        echo $this->Html->script('js-default/modernizr.min');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>

        <script type="text/javascript">
            setTimeout(function(){
                $("#flashMessage").fadeOut('slow');
            },4000);
        </script>
    </head>
    <body class="fixed-left">
        <div id="wrapper">
            <?php echo $this->element('header'); ?>
            <?php echo $this->element('menu'); ?>

            <section>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </section>


            <?php echo $this->element('footer'); ?>
        </div>

        <?php
        // GERAL
        echo $this->Html->script('js-default/bootstrap.min');
        echo $this->Html->script('js-default/waves');
        echo $this->Html->script('js-default/wow.min');
        echo $this->Html->script('js-default/jquery.nicescroll');
        echo $this->Html->script('js-default/jquery.scrollTo.min');
        echo $this->Html->script('../libs/jquery-sparkline/jquery.sparkline.min');
        echo $this->Html->script('../libs/jquery-detectmobile/detect');
        echo $this->Html->script('../libs/fastclick/fastclick');
        echo $this->Html->script('../libs/jquery-slimscroll/jquery.slimscroll');
        echo $this->Html->script('../libs/jquery-blockui/jquery.blockUI');
        echo $this->Html->css('../libs/datatables/jquery.dataTables.min');


        // PLUGINS
        echo $this->Html->script('../libs/tagsinput/jquery.tagsinput.min');
        echo $this->Html->script('../libs/toggles/toggles.min');
        echo $this->Html->script('../libs/timepicker/bootstrap-timepicker.min');
        echo $this->Html->script('../libs/timepicker/bootstrap-datepicker');
        echo $this->Html->script('../libs/timepicker/bootstrap-datepicker.pt-BR');
        echo $this->Html->script('../libs/colorpicker/bootstrap-colorpicker');
        echo $this->Html->script('../libs/jquery-multi-select/jquery.multi-select');
        echo $this->Html->script('../libs/jquery-multi-select/jquery.quicksearch');
        echo $this->Html->script('../libs/bootstrap-inputmask/bootstrap-inputmask.min');
        echo $this->Html->script('../libs/spinner/spinner.min');
        echo $this->Html->script('../libs/select2/select2.min');
        echo $this->Html->script('../libs/nestable/jquery.nestable');
        echo $this->Html->script('../libs/nestable/nestable');
        echo $this->Html->script('../libs/summernote/summernote.min');
        echo $this->Html->script('../libs/sweet-alert/sweet-alert.min');
        echo $this->Html->script('../libs/sweet-alert/sweet-alert.init');
        echo $this->Html->script('../libs/modal-effect/js/classie');
        echo $this->Html->script('../libs/modal-effect/js/modalEffects');
        echo $this->Html->script('../libs/datatables/jquery.dataTables.min');
        echo $this->Html->script('../libs/datatables/dataTables.bootstrap');
        echo $this->Html->script('../libs/datatables/dataTables.bootstrap');
        echo $this->Html->script('../libs/bootstrap3-editable/moment.min');
        echo $this->Html->script('../libs/bootstrap3-editable/bootstrap-editable');
        echo $this->Html->script('../libs/bootstrap3-editable/demo-xeditable');
        echo $this->Html->script('../libs/jquery.validate/jquery.validate.min');
        echo $this->Html->script('../libs/jquery.validate/form-validation-init');
        echo $this->Html->script('../libs/notifications/notifications');
        echo $this->Html->script('../libs/notifications/notify.min');
        echo $this->Html->script('../libs/notifications/notify-metro');

        echo $this->Html->script('js-default/jquery.app');
        echo $this->Html->script('js-default/padroes.min');
        ?>

        <script>
            var resizefunc = [];
            var home = '<?php echo Configure::read('HOME')?>';
        </script>

    </body>
</html>