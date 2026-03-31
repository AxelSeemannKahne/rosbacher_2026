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
                    <script src="https://rosbacheraktion.matomo.cloud/index.php?module=CoreAdminHome&action=optOutJS&divId=matomo-opt-out&language=auto&showIntro=1"></script>

                </div>

                <script>
                    var _paq = window._paq = window._paq || [];

                    /* Erforderliche Zustimmung, um Tracking zu verhindern */
                    _paq.push(['requireCookieConsent']);

                    /* Funktion, um zu prüfen, ob ein Cookie mit einem bestimmten Namen existiert */
                    function checkCookie(name) {
                        return document.cookie.split('; ').some(cookie => cookie.startsWith(name + '='));
                    }

                    var initialConsentGiven = checkCookie('mtm_cookie_consent');
                    var consentRemoved = checkCookie('mtm_consent_removed');

                    /* tracker methods ... */
                    _paq.push(['trackPageView']);
                    _paq.push(['enableLinkTracking']);
                    (function() { /* Matomo Tracking Code */ })();
                </script>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const initialConsentDiv = document.querySelector('.initial_consent');
                        const optOutConsentDiv = document.querySelector('.opt_out_consent');
                        const consentButton = document.getElementById('consent-button');
                        const consentStatus = document.getElementById('consent-status');
                        const optOutCheckbox = document.querySelector('.opt_out_consent #matomo-opt-out input[type="checkbox"]');

                        function showInitialConsent() {
                            initialConsentDiv.style.display = 'block';
                            optOutConsentDiv.style.display = 'none';
                            consentStatus.style.display = 'none';
                            consentButton.textContent = 'Ja, ich stimme zu';
                        }

                        function showOptOutConsent() {
                            initialConsentDiv.style.display = 'none';
                            optOutConsentDiv.style.display = 'block';
                            consentStatus.style.display = 'block'; // Zeige "Tracking aktiviert" (impliziert vorherige Zustimmung)
                            consentButton.textContent = 'Zustimmung widerrufen'; // Ändere Button-Text
                            if (optOutCheckbox) {
                                optOutCheckbox.checked = true; // Opt-out Checkbox aktivieren
                            }
                        }

                        function showOptedOutState() {
                            initialConsentDiv.style.display = 'none';
                            optOutConsentDiv.style.display = 'block';
                            consentStatus.style.display = 'none'; // Kein "Tracking aktiviert" anzeigen
                            consentButton.textContent = 'Zustimmung geben'; // Button zum Reaktivieren
                            if (optOutCheckbox) {
                                optOutCheckbox.checked = false; // Opt-out Checkbox deaktivieren
                            }
                        }

                        // Initialen Zustand beim Laden der Seite prüfen
                        if (consentRemoved) {
                            showOptedOutState();
                        } else if (initialConsentGiven) {
                            showOptOutConsent();
                        } else {
                            showInitialConsent();
                        }

                        // Event-Listener für den Button im initialen Consent-Bereich (Zustimmung geben)
                        if (consentButton) {
                            consentButton.addEventListener('click', function() {
                                _paq.push(['rememberCookieConsentGiven']);
                                showOptOutConsent(); // UI nach Zustimmung aktualisieren
                            });
                        }

                        // Event-Listener für die Opt-out Checkbox
                        if (optOutCheckbox) {
                            optOutCheckbox.addEventListener('change', function() {
                                if (this.checked) {
                                    // Nutzer möchte Tracking deaktivieren (Opt-out)
                                    _paq.push(['forgetCookieConsentGiven']);
                                    showOptedOutState();
                                } else {
                                    // Nutzer möchte Tracking aktivieren (Opt-in nach vorherigem Opt-out)
                                    _paq.push(['rememberCookieConsentGiven']);
                                    showOptOutConsent();
                                }
                            });
                        }
                    });
                </script>

                <div id="matomo-opt-out"></div>
                <script src="https://rosbacheraktion.matomo.cloud/index.php?module=CoreAdminHome&action=optOutJS&divId=matomo-opt-out&language=auto&showIntro=1"></script>

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