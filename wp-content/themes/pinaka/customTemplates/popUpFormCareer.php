<!-- Popup Overlay -->
<div id="popupOverlayCareer" class="popupOverlay" style="display: none;">
    <div class="popupContent">
        <button id="closePopupBtn" class="closeBtn">&times;</button>
        <div class="mainForm">
            <form id="popUpForm">
                <input type="hidden" name="formType" value="popUpForm">
                <div class="formRow">
                    <div class="formGroup">
                        <label for="name">Name</label>
                        <input class="required" name="name" type="text"/>
                    </div>
                    <div class="formGroup">
                        <label for="email">Email Address</label>
                        <input name="email" class="required" type="email"/>
                    </div>
                </div>
                <div class="formRow">
                    <div class="formGroup">
                        <label for="company">Company Name</label>
                        <input name="company" class="required" type="text"/>
                    </div>
                    <div class="formGroup">
                        <label for="website">Company Website</label>
                        <input name="website" class="required" type="text"/>
                    </div>
                </div>
                <div class="formRow full">
                    <div class="formGroup">
                        <label for="message">Message</label>
                        <input class="required" name="message" type="text"/>
                    </div>
                </div>
                <button type="submit" class="themeBtn submitBtn">Get in Touch</button>
            </form>
            <p class="success-msg text-black" style="display:none">
                Thank you for submitting your details. Our team will get in touch with you shortly.
            </p>
        </div>
    </div>
</div>