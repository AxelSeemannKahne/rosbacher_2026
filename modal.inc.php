<div class="modal fade" tabindex="-1" id="dsgvoModal">
    <div class="modal-dialog modal-dialog-centered modal-lg ">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white">Datenschutzeinstellungen</h5>
                <button type="button" class="close btn-close-white" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="initial_consent" style="display: block">
                    <p>Wir setzen auf unserer Website Cookies ein. Sie können über die Schaltfläche "Ja, zulassen" Ihre Zustimmung geben. Ändern können Sie Ihre Einstellungen jederzeit auch nachträglich über das mitlaufende Datenschutz-Icon in der unteren linken Ecke des Browser-Fensters.</p>
                    <button id="consent-button" class="btn btn-primary float-right">Ja, zulassen</button>
                    <p id="consent-status" style="display:none;">Tracking aktiviert.</p>
                </div>

                <div class="opt_out_consent" style="display: block">
                    <div id="matomo-opt-out"></div>
                    <script src="https://piwik2.yum.de/index.php?module=CoreAdminHome&action=optOutJS&divId=matomo-opt-out&language=auto&showIntro=1"></script>
                </div>

                <script>
                    var _paq = window._paq = window._paq || [];

                    _paq.push(['requireCookieConsent']);

                    function checkCookie(name) {
                        return document.cookie.split('; ').some(cookie => cookie.startsWith(name + '='));
                    }

                    var initialConsentGiven = checkCookie('mtm_cookie_consent');
                    var consentRemoved = checkCookie('mtm_consent_removed');

                    _paq.push(['trackPageView']);
                    _paq.push(['enableLinkTracking']);

                    (function() {
                        /* NEU: Tracking Code für die neue Instanz */
                        var u="https://piwik2.yum.de/";
                        _paq.push(['setTrackerUrl', u+'matomo.php']);
                        _paq.push(['setSiteId', '45']);
                        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
                        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
                    })();
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const initialConsentDiv = document.querySelector('.initial_consent');
                        const optOutConsentDiv = document.querySelector('.opt_out_consent');
                        const consentButton = document.getElementById('consent-button');
                        const consentStatus = document.getElementById('consent-status');
                        // Fix: Wir suchen die Checkbox im geladenen Matomo-Iframe/Div

                        function showInitialConsent() {
                            initialConsentDiv.style.display = 'block';
                            optOutConsentDiv.style.display = 'none';
                            consentStatus.style.display = 'none';
                            consentButton.textContent = 'Ja, ich stimme zu';
                        }

                        function showOptOutConsent() {
                            initialConsentDiv.style.display = 'none';
                            optOutConsentDiv.style.display = 'block';
                            consentStatus.style.display = 'block';
                            consentButton.textContent = 'Zustimmung widerrufen';
                            const optOutCheckbox = document.querySelector('#matomo-opt-out input[type="checkbox"]');
                            if (optOutCheckbox) { optOutCheckbox.checked = true; }
                        }

                        function showOptedOutState() {
                            initialConsentDiv.style.display = 'none';
                            optOutConsentDiv.style.display = 'block';
                            consentStatus.style.display = 'none';
                            consentButton.textContent = 'Zustimmung geben';
                            const optOutCheckbox = document.querySelector('#matomo-opt-out input[type="checkbox"]');
                            if (optOutCheckbox) { optOutCheckbox.checked = false; }
                        }

                        if (consentRemoved) {
                            showOptedOutState();
                        } else if (initialConsentGiven) {
                            showOptOutConsent();
                        } else {
                            showInitialConsent();
                        }

                        if (consentButton) {
                            consentButton.addEventListener('click', function() {
                                // Wenn wir im "Widerrufen" Status sind:
                                if (consentButton.textContent === 'Zustimmung widerrufen') {
                                    _paq.push(['forgetCookieConsentGiven']);
                                    showOptedOutState();
                                } else {
                                    _paq.push(['rememberCookieConsentGiven']);
                                    showOptOutConsent();
                                }
                            });
                        }
                    });
                </script>
            </div>
            <div class="modal-footer">
                <div class="row w-100">
                    <div class="col-6">
                        <a class="text-black text-decoration-underline" href="/datenschutz.php">Datenschutz</a>
                    </div>
                    <div class="col-6 text-right">
                        <a class="text-black text-decoration-underline" href="/impressum.php" >Impressum</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>