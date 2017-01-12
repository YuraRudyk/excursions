config {
    protocol      = http
    domain        = excursions.lh
    enableRealUrl = 1
}

[globalString = IENV:TYPO3_SSL=1] || [globalString = _SERVER|HTTP_VIA=HTTPS*] || [globalString = _SERVER|HTTPS=On] || [globalString = _SERVER|HTTPS=on]
    config.protocol = https
[GLOBAL]