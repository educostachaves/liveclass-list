describe('app', function () {
    
    var scope, controller;
    
    beforeEach(function () {
        module('app');
    });

    describe('liveclassController', function () {
        beforeEach(inject(function ($rootScope, $controller) {
            scope = $rootScope.$new();
            controller = $controller('liveclassController', {
                '$scope': scope
            });
        }));
        
        it('Rows Json is Fine', function () {

            var obj = {
                "Url": "",
                "Id": null,
                "ChatUrl": "",
                "HomeworkUrl": "",
                "Name": "",
                "Disciplines": [{}],
                "Teachers": [{}],
                "ExtraContentUrl": "",
                "Start": "",
                "Duration": "",
                "IsFree": null,
                "IsTrial": null,
                "Tag": "",
                "Route": "",
                "Status": null
            };

            expect(obj).string.toEqual('Eduardo');

        });

    });
    
});

// Runner
(function () {
    var jasmineEnv = jasmine.getEnv();
    jasmineEnv.updateInterval = 1000;

    var htmlReporter = new jasmine.HtmlReporter();

    jasmineEnv.addReporter(htmlReporter);

    jasmineEnv.specFilter = function (spec) {
        return htmlReporter.specFilter(spec);
    };

    var currentWindowOnload = window.onload;

    window.onload = function () {
        if (currentWindowOnload) {
            currentWindowOnload();
        }
        execJasmine();
    };

    function execJasmine() {
        jasmineEnv.execute();
    }

})();