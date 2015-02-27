var planmodel = function () {
    var self = this;
    var planurls = urls.plan;
    var baseurl = urls.plan.addurl;
    //添加计划
    self.add = function () {
        var plandata = $('#form_item').serializeObject();
        $.post(planurls.addurl, plandata, function (result) {
            if(result)
        });
    }

    self.update = function () {

    }

    self.remove = function () {

    }
    self.get = function () {

    }
    self.getbyuid = function (uid) {
        //$.get()
    }
}


var myplanmodelobj = new myplanmodel();
ko.applyBindings(myplanmodelobj);