page = PAGE
page {
    typeNum = 0

    # Meta tags
    meta {
        X-UA-Compatible = IE=edge
        viewport        = width=device-width, initial-scale=1

        description.data = levelfield: -1,description,slide
        keywords.data    = levelfield: -1,keywords,slide

        robots = all
        robots {
            override                 = noindex, nofollow
            override.if.isTrue.field = no_search
        }
    }

    headerData {
        5 = TEXT
        5.value (
            <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        )
    }

    includeCSS {
        bootstrap = EXT:sem_ex_content/Resources/Public/Styles/bootstrap.css
        font = https://fonts.googleapis.com/icon?family=Material+Icons
        style = EXT:sem_ex_content/Resources/Public/Styles/style.css
    }

    includeJSFooter {
        ajax = https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
        bootstrap = EXT:sem_ex_content/Resources/Public/JavaScript/bootstrap.js
        myjs = EXT:sem_ex_content/Resources/Public/JavaScript/script.js

    }

    10 = FLUIDTEMPLATE
    10 {
        templateName = Default
        layoutRootPaths {
            10 = EXT:sem_ex_content/Resources/Private/Layouts/
        }
        partialRootPaths {
            10 = EXT:sem_ex_content/Resources/Private/Partials/
        }
        templateRootPaths {
            10 = EXT:sem_ex_content/Resources/Private/Templates/Page/
        }

        variables {
            content_header < styles.content.get
            content_header.select {
                pidInList = 2
            }
        }
    }    
}