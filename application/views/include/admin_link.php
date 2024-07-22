 <?php 
$user=$this->session->userdata("user");
if(empty($user)){
redirect("admin/login");
}   
   ?>
   
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="<?php echo base_url(); ?>media/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>media/admin/css/datepicker.css">

    <link href="<?php echo base_url(); ?>media/admin/css/style.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>media/admin/css/bootstrap-select.css" rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url(); ?>media/admin/css/font-awesome.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>media/admin/js/jquery.min.js"> </script>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url(); ?>media/admin/js/bootstrap-select.js"> </script>
    <script src="<?php echo base_url(); ?>media/admin/js/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="<?php echo base_url(); ?>media/admin/css/custom.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>media/admin/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/screenfull.js"></script>

    <script src="<?php echo base_url(); ?>media/admin/js/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>media/admin/js/bootstrap-datepicker.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
            if (!screenfull.enabled) {
                return false;
            }
            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <!----->
    <!--pie-chart--->
    <script src="<?php echo base_url(); ?>media/admin/js/pie-chart.js" type="text/javascript"></script>
    <!--skycons-icons-->
    <script src="<?php echo base_url(); ?>media/admin/js/skycons.js"></script>
    <!--//skycons-icons-->
    <style>
        .content .form-control {
            width: 100%;
        }

        textarea {
            width: 100%;
        }
    </style>
    <!-- TinyMCE -->
    <script type="text/javascript" src="<?php echo base_url(); ?>media/admin/tiny_mce/tiny_mce.js"></script>
    <script type="text/javascript">
        tinyMCE.init({
            // General options
            mode: "textareas",
            theme: "advanced",
            skin: "o2k7",
            forced_root_block: "",
            //skin_variant : "black",
            plugins: "openmanager,autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",




            // Theme options
            theme_advanced_buttons1: "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
            theme_advanced_buttons2: "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
            theme_advanced_buttons3: "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
            theme_advanced_buttons4: "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks,|,openmanager",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "bottom",
            theme_advanced_resizing: true,

            //Open Manager Options
            file_browser_callback: "openmanager",
            open_manager_upload_path: '../../../../uploads/',

            // Example content CSS (should be your site CSS)
            content_css: "css/content.css",

            // Drop lists for link/image/media/template dialogs
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            external_image_list_url: "lists/image_list.js",
            media_external_list_url: "lists/media_list.js",

            // Style formats
            style_formats: [{
                    title: 'Bold text',
                    inline: 'b'
                },
                {
                    title: 'Red text',
                    inline: 'span',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Red header',
                    block: 'h1',
                    styles: {
                        color: '#ff0000'
                    }
                },
                {
                    title: 'Example 1',
                    inline: 'span',
                    classes: 'example1'
                },
                {
                    title: 'Example 2',
                    inline: 'span',
                    classes: 'example2'
                },
                {
                    title: 'Table styles'
                },
                {
                    title: 'Table row 1',
                    selector: 'tr',
                    classes: 'tablerow1'
                }
            ],

            // Replace values for the template plugin
            template_replace_values: {
                username: "Some User",
                staffid: "991234"
            }
        });
    </script>


    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

    <link href="<?php echo base_url(); ?>media/admin/css/jquery.dataTables.min.css" rel='stylesheet' type='text/css' />






    <!-- /TinyMCE -->
