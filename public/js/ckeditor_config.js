// TODO:
//  this file created by download ckeditor standard package from:
//  https://ckeditor.com/docs/ckeditor4/latest/guide/dev_installation.html#download
//  and copy config.js to my project and customize it.
//  saeed doc.


/**
 * @license Copyright (c) 2003-2020, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function (config) {
    // Define changes to default configuration here.
    // For complete reference see:
    // https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html

    config.skin = 'office2013,/js/ckeditor_skins/office2013/';
    config.extraPlugins = [
        'bidi',
        'copyformatting',
        'justify',
        'font',
        'colorbutton',
        'preview',
        'print',
        'smiley',
    ];
    // config.contentsLangDirection = 'rtl';

    // TODO:
    //  the line below added for define csrftoken for upload image to server before submit form.
    //    We must also add:
    //     <meta name="csrf-token" content="{{ csrf_token() }}">
    //    to app.blade.php
    //    saeed doc.
    const CSRFToken = $('meta[name="csrf-token"]').attr('content');

    // TODO: 4 lines below copied from
    //     https://unisharp.github.io/laravel-filemanager/integration
    //    for integrate Laravel File Manager with ckeditor.
    //    saeed doc.
    config.filebrowserImageBrowseUrl = '/laravel-filemanager?type=Images';
    config.filebrowserImageUploadUrl = '/laravel-filemanager/upload?type=Images&_token=' + CSRFToken;
    config.filebrowserBrowseUrl = '/laravel-filemanager?type=Files';
    config.filebrowserUploadUrl = '/laravel-filemanager/upload?type=Files&_token=' + CSRFToken;


    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'links'},
        {name: 'insert'},
        {name: 'forms'},
        {name: 'tools'},
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'others'},
        '/',
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        {name: 'styles'},
        {name: 'colors'},
        {name: 'about'}
    ];

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.
    config.removeButtons = 'Underline,Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;pre';

    // Simplify the dialog windows.
    // config.removeDialogTabs = 'image:advanced;link:advanced';

    // TODO:
    //  this config below added for integrated with an external file manager.
    //  https://ckeditor.com/docs/ckeditor4/latest/guide/dev_file_browser_api.html
    //  https://stackoverflow.com/questions/54272909/ckeditor-upload-image-error-undefined-index-ckeditorfuncnum
    //  saeed doc.
    config.filebrowserUploadMethod = "form";


    // TODO:
    //  Remove "Insert Paragraph Here" Pointer.
    //  https://ckeditor.com/old/forums/CKEditor/How-to-Remove-Insert-Paragraph-Here-Pointer         saeed doc.
    //  saeed doc.
    config.removePlugins = 'magicline';


    config.contentsCss = '/css/fonts.css';
    config.font_names =

        'Arial/Arial, Helvetica, sans-serif;' +
        'Comic Sans MS/Comic Sans MS, cursive;' +
        'Courier New/Courier New, Courier, monospace;' +
        'Georgia/Georgia, serif;' +
        'Lucida Sans Unicode/Lucida Sans Unicode, Lucida Grande, sans-serif;' +
        'Tahoma/Tahoma, Geneva, sans-serif;' +
        'Times New Roman/Times New Roman, Times, serif;' +
        'Trebuchet MS/Trebuchet MS, Helvetica, sans-serif;' +
        'Verdana/Verdana, Geneva, sans-serif;' +
        'Dekers/dekers_true;' +
        'Arizonia;' +
        'BBadr;' +
        'BBaran;' +
        'BBardiya;' +
        'BBadr;' +
        'BBaran;' +
        'BBardiya;' +
        'BCompset;' +
        'BDavat;' +
        'BElham;' +
        'BEsfehanBold;' +
        'BFantezy;' +
        'BFarnaz;' +
        'BFerdosi;' +
        'BHamid;' +
        'BHelal;' +
        'BHoma;' +
        'BJadidBold;' +
        'BJalal;' +
        'BKoodakBold;' +
        'BKourosh;' +
        'BLotus;' +
        'BMahsa;' +
        'BMehrBold;' +
        'BMitra;' +
        'BMorvarid;' +
        'BNarm;' +
        'BNasimBold;' +
        'BNazanin;' +
        'BRoya;' +
        'BSetarehBold;' +
        'BShiraz;' +
        'BSinaBold;' +
        'BTabassom;' +
        'BTehran;' +
        'BTitrBold;' +
        'BTitrTGEBold;' +
        'BTraffic;' +
        'BVahidBold;' +
        'BYagut;' +
        'BYas;' +
        'BYekan;' +
        'BZar;' +
        'BZiba;'


    ;


};

