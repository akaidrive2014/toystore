<?php
$this->avoidDoubleLoadJS();
/* @var $this CategoriesController */
/* @var $model ECCategory */
/* @var $form CActiveForm */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $title; ?>
    </div>
    <div class="panel-body form">
        <ul class="nav nav-tabs" id="tabs_a">
            <li class="active">
                <a data-toggle="tab" href="#info"><i class="glyphicon glyphicon-user"></i> Info</a>
            </li>
            <li>
                <a data-toggle="tab" href="#discount"><i class="glyphicon glyphicon-lock"></i> Discount</a>
            </li>
            <li>
                <a data-toggle="tab" href="#banner"><i class="glyphicon glyphicon-lock"></i> Banner</a>
            </li>
            <li>
                <a data-toggle="tab" href="#seo"><i class="glyphicon glyphicon-lock"></i> Seo</a>
            </li>
        </ul>
        <?php $form = $this->beginWidget('CActiveForm', array(
            'id' => $this->idName . '-form',
            // Please note: When you enable ajax validation, make sure the corresponding
            // controller action is handling ajax validation correctly.
            // There is a call to performAjaxValidation() commented in generated controller code.
            // See class documentation of CActiveForm for details on this.
            'enableAjaxValidation' => true,
        )); ?>


        <p class="note" style="margin-top: 25px;">Fields with <span class="required">*</span> are required.</p>

        <div class="tab-content" id="tabs_content_a">
            <div id="info" class="tab-pane fade in active">
                <div class="row">
                    <?php echo $form->labelEx($model, 'category_name'); ?>
                    <?php echo $form->textField($model, 'category_name', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control')); ?>
                    <?php
                    echo $form->hiddenField($model, 'parent_id', array('size' => 60, 'maxlength' => 100, 'class' => 'form-control', 'value' => $parent_id));
                    ?>
                    <?php echo $form->error($model, 'category_name'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'is_active'); ?>
                    <?php echo $form->dropDownList($model, 'is_active', $model->status, array('empty' => '--Status--', 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'is_active'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'category_description'); ?>
                    <?php echo $form->textArea($model, 'category_description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'category_description'); ?>
                </div>
            </div>
            <div id="discount" class="tab-pane fade">
                <div class="row">
                    <?php echo $form->labelEx($model, 'discount_amount'); ?>
                    <?php echo $form->textField($model, 'discount_amount', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'discount_amount'); ?>
                </div>

                <div class="row col-md-2" style="padding-left:0px;">
                    <?php echo $form->labelEx($model, 'discount_start'); ?>
                    <?php echo $form->textField($model, 'discount_start', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control datepickerStart', "data-date-format" => "dd-mm-yyyy")); ?>
                    <?php echo $form->error($model, 'discount_start'); ?>
                </div>
                <div class="row col-md-1" style="padding-left:0px;">
                    <?php echo $form->labelEx($model, 'start_time'); ?>
                    <?php echo $form->textField($model, 'start_time', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control time-picker', "data-date-format" => "dd-mm-yyyy")); ?>
					<button type="button" class="btn btn-default" style="position:absolute;right:0%;top:36%"><i class="fa fa-clock-o"></i></button>
                    <?php //echo $form->error($model, 'start_time'); ?>
                </div>
                <div class="clearfix"></div>
                <div class="row col-md-2" style="padding-left:0px;">
                    <?php echo $form->labelEx($model, 'discount_end'); ?>
                    <?php echo $form->textField($model, 'discount_end', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control datepickerEnd', "data-date-format" => "dd-mm-yyyy")); ?>
                    <?php echo $form->error($model, 'discount_end'); ?>
                </div>
                <div class="row col-md-1" style="padding-left:0px;">
				<?php echo $form->labelEx($model, 'end_time'); ?>
                            <?php echo $form->textField($model, 'end_time', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control time-picker', "data-date-format" => "dd-mm-yyyy")); ?>
                            <?php echo $form->error($model, 'end_time'); ?>
												 
													<button type="button" class="btn btn-default" style="position:absolute;right:0%;top:36%"><i class="fa fa-clock-o"></i></button>
                     
                    <?php /*
                    <?php echo $form->labelEx($model, 'end_time'); ?>
                    <?php echo $form->textField($model, 'end_time', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control datepickerStart', "data-date-format" => "dd-mm-yyyy")); ?>
                    <?php echo $form->error($model, 'end_time'); ?>
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-clock-o"></i>
                    </button>
                    </span>*/ ?>

                </div>
                <div class="clearfix"></div>
            </div>
            <div id="banner" class="tab-pane fade">
                <fieldset>
                    <legend>Category Image</legend>
                    <div class="col-sm-11 col-lg-12">
				<span class="btn btn-success fileinput-button"> <i class="glyphicon glyphicon-plus"></i> <span>Select files...</span> <!-- The file input field used as target for the file upload widget -->
					<input id="fileupload" type="file" name="files[]" multiple style="margin-top:-72px !important;">
                    <?php echo $form->hiddenField($model, 'category_image', array('style' => 'margin-top:-72px !important;', 'class' => 'form-control')); ?>
				</span>
				<span class="view-banner">
					<?php
                    if (!empty($model->category_image)) {
                        ?>
                        <img width="135"
                             src="<?php echo $this->baseUrl(); ?>/images/banners/thumbnail/<?php echo $model->category_image; ?>"
                             style="float:right;">
                    <?php } ?>
				</span>

                        <div class="clearfix"></div>
                        <br>
                        <br>
                        <!-- The global progress bar -->
                        <div id="progress" class="progress">
                            <div class="progress-bar progress-bar-success"></div>
                        </div>
                        <!-- The container for the uploaded files -->
                        <div id="files" class="files"></div>
                    </div>
                </fieldset>
            </div>
            <div id="seo" class="tab-pane fade">
                <div class="row">
                    <?php echo $form->labelEx($model, 'friendly_url'); ?>
                    <?php echo $form->textField($model, 'friendly_url', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'friendly_url'); ?>
                </div>
                <div class="row">
                    <?php echo $form->labelEx($model, 'seo_title'); ?>
                    <?php echo $form->textField($model, 'seo_title', array('size' => 60, 'maxlength' => 500, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_title'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'seo_description'); ?>
                    <?php echo $form->textArea($model, 'seo_description', array('rows' => 6, 'cols' => 50, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_description'); ?>
                </div>

                <div class="row">
                    <?php echo $form->labelEx($model, 'seo_keywords'); ?>
                    <?php echo $form->textField($model, 'seo_keywords', array('size' => 60, 'maxlength' => 5000, 'class' => 'form-control')); ?>
                    <?php echo $form->error($model, 'seo_keywords'); ?>
                </div>
            </div>
        </div>
        <div class="row buttons">
            <?php echo CHtml::Button($model->isNewRecord ? 'Create & Close' : 'Save & Close', array('class' => 'btn btn-success', 'id' => 'save_close')); ?>
            <?php echo CHtml::Button($model->isNewRecord ? 'Create & Continue Edit' : 'Save & Continue Edit', array('class' => 'btn btn-primary', 'id' => 'save_edit')); ?>
            <?php echo CHtml::Button('Cancel', array('class' => 'btn btn-info pull-right', 'id' => "cancel")); ?>
        </div>
        <?php $this->endWidget(); ?>

    </div>
</div><!-- form -->
<script>
    $(function () {
        //datepicker
        /*$('.datepicker').datepicker({
         format:'dd/mm/yyyy',
         todayHighlight: true
         });*/
        if ($('.ts_datepicker').length) {
            $('.ts_datepicker').datepicker({
                todayHighlight: true
            })
        }
        if (($('.datepickerStart').length) && ($('.datepickerEnd').length)) {
            $('.datepickerStart').datepicker({
                todayHighlight: true
            }).on('changeDate', function (e) {
                $('.datepickerEnd').datepicker('setStartDate', e.date);
            });
            $('.datepickerEnd').datepicker({
                todayHighlight: true
            }).on('changeDate', function (e) {
                $('.datepickerStart').datepicker('setEndDate', e.date)
            });
        }
		if($('.time-picker').length) {
				$('.time-picker').timepicker({
					minuteStep: 1,
					secondStep: 5,
					showInputs: false,
					modalBackdrop: true,
					showSeconds: true,
					showMeridian: false
				})
			}
        /*if($('#tp-24h').length) {
            $('#tp-24h').timepicker({
                minuteStep: 1,
                template: 'modal',
                showSeconds: true,
                showMeridian: false
            })
        }*/

        $("#cancel").click(function () {
            loading('show');
            $(".form-x").fadeOut(function () {
                $(".grid-x").fadeIn(function () {
                    loading('hide');
                });
            });
        });
        $("#save_close").click(function () {
            saveData();
        });
        function saveData() {
            loading('show');
            $.post($('#<?php echo $this->idName;?>-form').attr('action'), $('#<?php echo $this->idName;?>-form').serialize(), function (response) {
                if (response.success == true) {
                    success('show');
                    setTimeout(function () {
                        success('hide');
                    }, 1000);
                    $('#<?php echo $this->idName;?>-grid').yiiGridView('update', {
                        data: $(this).serialize()
                    });
                    $(".form-x").fadeOut();
                    $(".grid-x").fadeIn();
                } else {
                    error('show');
                    setTimeout(function () {
                        error('hide');
                    }, 1000);
                    if (response.ECCategory_category_name) {
                        $("#ECCategory_category_name.form-control").addClass('error');
                        $('#ECCategory_category_name_em_').html(response.ECCategory_category_name).show();
                    } else {
                        $("#ECCategory_category_name.form-control").removeClass('error');
                        $('#ECCategory_category_name_em_').empty();
                    }
                    if (response.SBPage_page_slug) {
                        $("#SBPage_page_slug.form-control").addClass('error');
                        $('#SBPage_page_slug_em_').html(response.SBPage_page_slug).show();
                    } else {
                        $("#SBPage_page_slug").removeClass('error');
                        $('#SBPage_page_slug_em_').hide();
                    }
                    if (response.SBNews_news_date) {
                        $("#SBNews_news_date.form-control").addClass('error');
                        $('#SBNews_news_date_em_').html(response.SBNews_news_date).show();
                    } else {
                        $("#SBNews_news_date.form-control").removeClass('error');
                        $('#SBNews_news_date_em_').hide();
                    }
                }
                loading('hide');
            }, 'json');

        };
    });
</script>
<script>
    $(function () {
        'use strict';
        // Change this to the location of your server-side upload handler:
        var url = window.location.hostname === 'blueimp.github.io' ?
            '//jquery-file-upload.appspot.com/' : '<?php echo $this->baseUrl();?>/images/upload.php?dir=banners';
        $('#fileupload').fileupload({
            url: url,
            dataType: 'json',
            done: function (e, data) {
                $.each(data.result.files, function (index, file) {
                    $('<p/>').text(file.name).appendTo('#files');
                    $(".view-banner").html('<img style="float:right;" width="135" src="<?php echo $this->baseUrl();?>/images/banners/thumbnail/' + file.name + '">');
                    $("#ECCategory_category_image.form-control").val(file.name);
                });
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                $('#progress .progress-bar').css(
                    'width',
                    progress + '%'
                );
            }
        }).prop('disabled', !$.support.fileInput)
            .parent().addClass($.support.fileInput ? undefined : 'disabled');
    });
</script>