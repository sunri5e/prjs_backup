define(function(){
    return {
        pageGroups: [{"id":"f68ce905-4bb5-5643-120a-c2a129318c68","name":"Default group","pages":[{"id":"9e76c711-91ef-8f96-eb49-32f4d44c0b48","name":"Главная"},{"id":"eee24125-45eb-787a-09ce-0cc6587a1091","name":"Интернет"},{"id":"d37c97db-e190-3b72-1af5-2c9fce07c7c0","name":"Телефония"},{"id":"d7f67e15-42d0-b71f-7303-be28f663bdbb","name":"Монтаж волз"},{"id":"f07ac213-03ed-abda-28ee-9bf4b7194cbc","name":"Каналы"},{"id":"3af4269e-92ac-5399-c6fd-bc4982289ac8","name":"БЦ"},{"id":"684f0829-e75c-e925-90eb-a4db66dfee07","name":"Аутсорсинг"},{"id":"6ddbf7ae-54ee-9cfe-4db2-64a6f0d4a5cb","name":"Контакты"},{"id":"46725dea-338f-a46b-4357-10d666ae43f3","name":"Решения"},{"id":"4706abfb-9e5e-6e8c-eb40-f1d0a584a4a6","name":"Техническая информация"},{"id":"e313d227-560e-960c-7983-55d6d94bd6e1","name":"Модальное окно"},{"id":"3a298df4-e206-403b-1bc3-bbc4a69b7389","name":"Личный кабинет"},{"id":"70e18e4c-6667-32e6-e6f1-f986abc1e273","name":"Информационно-Технический раздел"},{"id":"348350bb-3b67-719f-fd3f-8bd233698d07","name":"Финансовый раздел"}]}],
        downloadLink: "//services.ninjamock.com/html/htmlExport/download?shareCode=F6MQS&projectName=ЦИФРА",
        startupPageId: 0,

        forEachPage: function(func, thisArg){
        	for (var i = 0, l = this.pageGroups.length; i < l; ++i){
                var group = this.pageGroups[i];
                for (var j = 0, k = group.pages.length; j < k; ++j){
                    var page = group.pages[j];
                    if (func.call(thisArg, page) === false){
                    	return;
                    }
                }
            }
        },
        findPageById: function(pageId){
        	var result;
        	this.forEachPage(function(page){
        		if (page.id === pageId){
        			result = page;
        			return false;
        		}
        	});
        	return result;
        }
    }
});
