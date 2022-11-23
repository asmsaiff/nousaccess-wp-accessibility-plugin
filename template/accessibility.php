<div id="reading-guide" class="d-none " style="transform: translateY(430px);"></div>

<div class="position-fixed top-0 accessibility-wrapper d-flex justify-content-center flex-column ">
    <div id="accessibility" class="d-flex position-relative flex-row-reverse justify-content-start gap-1 ">
        <button type="button" id="open-accessibility" class="btn btn-primary border-0 position-absolute start-0 text-white rounded-circle p-0 shadow-none ">
            <i class="fas fa-universal-access "></i>
            <span class="d-none ">
                <?php
                    _e( 'Accessibility', 'accessbee' );
                ?>
            </span>
        </button>
        <div class="accessibility-buttons p-2 rounded">
            <div id="accessibilityBar" tabindex="0" title="Accessibility Menu" class="active d-flex flex-column ">
                <div class="d-flex gap-1 ">
                    <button id="decrease-plugin-ac" type="button" aria-label="decrement font" title="decrement font" class="setAccessibility setAccessibility2 " data-accessibility="decFont">
                        <strong class="me-0 w-100 ">
                            <span class="">A <sup class="">-</sup></span>
                        </strong>
                    </button>
                    <button id="increase-plugin-ac" type="button" aria-label="increment font" title="increment font" class="setAccessibility setAccessibility2 " data-accessibility="incFont">
                        <strong class="me-0 w-100 ">
                            <span class="">A <sup class="">+</sup></span>
                        </strong>
                    </button>
                </div>

                <button id="monochrome" type="button" aria-label=" Monochrome" title=" Monochrome" class="setAccessibility " data-accessibility="contrast">
                    <strong class=""><i class="fas fa-tint "></i></strong> 
                    <?php
                        _e( 'Monochrome', 'accessbee' );
                    ?>
                </button>
                <button id="invertColor" type="button" aria-label="Invert Colors" title="Invert Colors" class="setAccessibility " data-accessibility="dark">
                    <strong class=""><i class="fas fa-adjust "></i></strong>
                    <?php
                        _e( 'Invert Colors', 'accessbee' );
                    ?>
                </button>
                <button id="cursormode" type="button" aria-label="Big Cursor" title="Big Cursor" class="setAccessibility " data-accessibility="bcursor">
                    <strong class=""><i class="fas fa-mouse-pointer "></i></strong>
                    <?php
                        _e( 'Big Cursor', 'accessbee' );
                    ?>
                </button>
                <button id="linkmode" type="button" aria-label="Highlight Links" title="Highlight Links" class="setAccessibility " data-accessibility="highlink">
                    <strong class=""><i class="fas fa-link "></i></strong>
                    <?php
                        _e( 'Highlight Links', 'accessbee' );
                    ?>
                </button>
                <button id="headingmode" type="button" aria-label="Show Headings" title="Show Headings" class="setAccessibility " data-accessibility="heading">
                    <strong class=""><i class="fas fa-heading "></i></strong>
                    <?php
                        _e( 'Show Headings', 'accessbee' );
                    ?>
                </button>
                <button id="readingguide" type="button" aria-label="Reading Guide" title="Reading Guide" class="setAccessibility " data-accessibility="readingLine">
                    <strong class=""><i class="fas fa-book-open "></i></strong>
                    <?php
                        _e( 'Reading Guide', 'accessbee' );
                    ?>
                </button>
                <button id="resetClass" type="button" aria-label="Reset" title="Reset" class="setAccessibility " data-accessibility="reset">
                    <strong class=""><i class="fas fa-redo-alt "></i></strong>
                    <?php
                        _e( 'Reset Accessibility', 'accessbee' );
                    ?>
                </button>
            </div>
        </div>
    </div>
</div>