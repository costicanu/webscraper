@extends('layouts.frontend.frontend')

@section('extraScripts')

    <!-- Girl Gallery -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/girl_gallery/load/skin_modern_silver.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('js/girl_gallery/load/html_content.css')}}"/>
    <script type="text/javascript" src="{{URL::asset('js/girl_gallery/java/FWDRoyal3DCoverflow.js')}}"></script>
    <script type="text/javascript">
        FWDR3DCovUtils.onReady(function () {
            var coverflow = new FWDRoyal3DCoverflow({
                //required settings
                coverflowHolderDivId: "myDiv",
                coverflowDataListDivId: "coverflowData",
                displayType: "fluidwidth",
                autoScale: "yes",
                coverflowWidth: 940,
                coverflowHeight: 730,
                mainFolderPath: "load",
                skinPath: "../../js/girl_gallery/load/skin_modern_silver",

                //main settings
                backgroundColor: "#DDDDDD",
                backgroundImagePath: "{{URL::asset('js/girl_gallery/load/skin_modern_silver/main_skin/background.jpg')}}",
                thumbnailsBackgroundImagePath: "",
                scrollbarBackgroundImagePath: "{{URL::asset('js/girl_gallery/load/skin_modern_silver/main_skin/scrollbarBackground.jpg')}}",
                backgroundRepeat: "repeat-x",
                showDisplay2DAlways: "no",
                coverflowStartPosition: "center",
                numberOfThumbnailsToDisplayLeftAndRight: "2",
                slideshowDelay: 3000,
                autoplay: "yes",
                showPrevButton: "yes",
                showNextButton: "yes",
                showSlideshowButton: "yes",
                disableNextAndPrevButtonsOnMobile: "no",
                controlsMaxWidth: 940,
                controlsHeight: 31,
                showLargeNextAndPrevButtons: "yes",
                largeNextAndPrevButtonsOffest: 15,
                slideshowTimerColor: "#777777",
                showContextMenu: "no",
                addKeyboardSupport: "yes",
                useDragAndSwipe: "yes",
                fluidWidthZIndex: 0,

                //thumbnail settings
                thumbnailWidth: 440,
                thumbnailHeight: 660,
                thumbnailXOffset3D: 80,
                thumbnailXSpace3D: 78,
                thumbnailZOffset3D: 200,
                thumbnailZSpace3D: 93,
                thumbnailYAngle3D: 0,
                thumbnailXOffset2D: 20,
                thumbnailXSpace2D: 30,
                thumbnailBorderSize: 10,
                thumbnailBackgroundColor: "#666666",
                thumbnailBorderColor1: "#fcfdfd",
                thumbnailBorderColor2: "#e4e4e4",
                transparentImages: "no",
                maxNumberOfThumbnailsOnMobile: 13,
                showThumbnailsGradient: "yes",
                showThumbnailsHtmlContent: "no",
                textBackgroundColor: "#333333",
                textBackgroundOpacity: .7,
                showText: "yes",
                showTextBackgroundImage: "yes",
                showThumbnailBoxShadow: "yes",
                thumbnailBoxShadowCss: "0px 2px 2px #555555",
                showReflection: "yes",
                reflectionHeight: 60,
                reflectionDistance: 0,
                reflectionOpacity: .2,

                //scrollbar settings
                showScrollbar: "yes",
                disableScrollbarOnMobile: "yes",
                enableMouseWheelScroll: "no",
                scrollbarHandlerWidth: 300,
                scrollbarTextColorNormal: "#777777",
                scrollbarTextColorSelected: "#000000",

                //combobox settings
                showComboBox: "no",
                startAtCategory: 1,
                selectLabel: "SELECT CATEGORIES",
                allCategoriesLabel: "All Categories",
                showAllCategories: "no",
                comboBoxPosition: "topright",
                selectorBackgroundNormalColor1: "#fcfdfd",
                selectorBackgroundNormalColor2: "#e4e4e4",
                selectorBackgroundSelectedColor1: "#a7a7a7",
                selectorBackgroundSelectedColor2: "#8e8e8e",
                selectorTextNormalColor: "#8b8b8b",
                selectorTextSelectedColor: "#FFFFFF",
                buttonBackgroundNormalColor1: "#e7e7e7",
                buttonBackgroundNormalColor2: "#e7e7e7",
                buttonBackgroundSelectedColor1: "#a7a7a7",
                buttonBackgroundSelectedColor2: "#8e8e8e",
                buttonTextNormalColor: "#000000",
                buttonTextSelectedColor: "#FFFFFF",
                comboBoxShadowColor: "#000000",
                comboBoxHorizontalMargins: 12,
                comboBoxVerticalMargins: 12,
                comboBoxCornerRadius: 0,

                //bullets navigation settings
                showBulletsNavigation: "no",
                bulletsBackgroundNormalColor1: "#fcfdfd",
                bulletsBackgroundNormalColor2: "#e4e4e4",
                bulletsBackgroundSelectedColor1: "#000000",
                bulletsBackgroundSelectedColor2: "#666666",
                bulletsShadow: "0px 0px 4px #888888",
                bulletsNormalRadius: 7,
                bulletsSelectedRadius: 8,
                spaceBetweenBullets: 16,
                bulletsOffset: 18,

                //lightbox settings
                buttonsAlignment: "in",
                itemBoxShadow: "none",
                descriptionWindowAnimationType: "opacity",
                descriptionWindowPosition: "bottom",
                slideShowAutoPlay: "yes",
                addKeyboardSupport: "yes",
                showCloseButton: "yes",
                showShareButton: "yes",
                showZoomButton: "no",
                showSlideShowButton: "yes",
                showSlideShowAnimation: "yes",
                showNextAndPrevButtons: "yes",
                showNextAndPrevButtonsOnMobile: "yes",
                showDescriptionButton: "yes",
                showDescriptionByDefault: "no",
                videoShowFullScreenButton: "yes",
                videoAutoPlay: "no",
                nextVideoOrAudioAutoPlay: "yes",
                videoLoop: "no",
                audioAutoPlay: "no",
                audioLoop: "no",
                backgroundOpacity: .9,
                descriptionWindowBackgroundOpacity: .95,
                buttonsHideDelay: 3,
                slideShowDelay: 4,
                defaultItemWidth: 640,
                defaultItemHeight: 480,
                itemOffsetHeight: 50,
                spaceBetweenButtons: 1,
                buttonsOffsetIn: 2,
                buttonsOffsetOut: 5,
                itemBorderSize: 5,
                itemBorderRadius: 0,
                itemBackgroundColor: "#333333",
                itemBorderColor1: "#fcfdfd",
                itemBorderColor2: "#e4e4e4",
                lightBoxBackgroundColor: "#000000",
                descriptionWindowBackgroundColor: "#FFFFFF",
                videoPosterBackgroundColor: "#0099FF",
                videoControllerBackgroundColor: "#FFFFFF",
                audioControllerBackgroundColor: "#FFFFFF",
                timeColor: "#000000"
            });
        })
    </script>
    <!-- end of Girl Gallery -->

@stop


