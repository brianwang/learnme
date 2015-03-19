var stepmodel = function (title, idx) {
    var self = this;
    self.title = ko.observable(title);
    self.idx = ko.observable(idx);
    return self;
}

var planmodel = function () {
    var self = this;
    var planurls = urls.plan;
    self.baseurl = urls.plan.baseurl;
    self.plans = ko.observableArray([]);
    for (var i = 0; i < gl.plans.length; i++) {
        var plan = gl.plans[i];
        var steps = plan.steps.slice(0);
        plan.steps = ko.observableArray([]);
        for (var j = 0; j < steps.length; j++) {
            var step = steps[j];
            plan.steps.push(new stepmodel(step.title, step.idx));
        }
        self.plans.push(plan);
    }
    //self.plans = ko.observableArray(gl.plans);
    //添加计划
    self.add = function () {
        if ($("#form_plan").valid()) {
            var $tagsval = $('#tags').val();
            if ($tagsval != "") {
                var plandata = $('#form_plan').serializeForm();
                $.post(planurls.addurl, plandata, function (result) {
                    if (result.result == 'success') {
                        //alert('添加成功');
                        var plan = result.plan;
                        plan.steps = ko.observableArray([]);
                        self.plans.push(plan);
                        self.close();
                    } else {
                        alert(result.message);
                    }
                });
            } else {
                var $lable = $("<label class=\"error\">请输入至少一个标签</label>");
                $('#tags').next().after($lable);
            }
        }
    }

    self.close = function () {
        //清空Form
        $("#form_plan")[0].reset();
        $('#tmp_addplan').show();
        $('#form_plan').hide();
    }

    self.update = self.add;

    self.remove = function () {
        var planid = $(this).before();
        $.post(planurls.rmurl, {planid: planid}, function (result) {
            if (result.result == 'success') {
                alert('添加成功');
            } else {
                alert(result.message);
            }
        });
    }
    self.get = function () {

    }


    self.getbyuid = function (uid) {
        //$.get()
    }
    self.updateplan = function (plan) {
        //$('#updateplan_'+plan.id).append()
        var inputid = '#input_' + plan.id;
        $(inputid).toggle();
        $(inputid).prev().hide();
        //var title = $('#input_'+plan.id).value;
    }

    self.saveplan = function (plan) {
        var title = $('#input_' + plan.id + ' input').val();
        $.post(planurls.updateurl, {id: plan.id, title: title}, function (result) {
            if (result.result == 'success') {
                //alert('添加成功');
                var newplan = result.plan;
                var idx = self.plans.indexOf(plan);
                self.plans.splice(idx, 1);
                slef.plans.push(newplan);
                //plan.steps = ko.observableArray([]);
                //self.plans.push(plan);
                self.close();
            } else {
                alert(result.message);
            }
        });
    }
//    .formValidation({
//        framework: 'bootstrap',
//        excluded: ':disabled',
//        icon: {
//            valid: 'glyphicon glyphicon-ok',
//            invalid: 'glyphicon glyphicon-remove',
//            validating: 'glyphicon glyphicon-refresh'
//        },
//        fields: {
//            tags: {
//                validators: {
//                    notEmpty: {
//                        message: '请输入最少一个标签'
//                    }
//                }
//            }
//        }
//    });
    return self;
}
var myplanview = function () {
    var self = new planmodel();
    var planurls = urls.plan;
    self.showaddplan = function () {
        $('#tmp_addplan').hide();
        $('#form_plan').show();
        //$('#form_plan').toggle();
    }
    self.showaddstep = function (plan) {
        //$(this).hide();
        //$(this).next().show();
        $('#tmp_addstep_' + plan.id).hide();
        $('#form_step_' + plan.id).show();
    }
    self.addstep = function () {
        var planid = this.id;
        var stepform = $("#form_step_" + planid);
        if (stepform.valid()) {
            var data = stepform.serializeForm();
            var planid = data.plan_id;
            var plans = self.plans();
            for (var i = 0; i < plans.length; i++) {
                if (plans[i].id == planid) {
                    data.idx = plans[i].steps.length;
                    break;
                }
            }
            $.post(planurls.addstepurl, data, function (result) {
                if (result.result == 'success') {
                    //alert('添加成功');
                    var step = result.step;
                    var match = ko.utils.arrayFirst(self.plans(), function (item) {
                        return step.plan_id === item.id;
                    });
                    if (match) {
                        match.steps.push(step);
                    }
                    self.hideaddstep(step.plan_id);
                    //self.plans.push
                } else {
                    alert(result.message);
                }
            });
        }
    }
    self.hideaddstep = function (plan_id) {
        $('#tmp_addstep_' + plan_id).show();
        $('#form_step_' + plan_id).hide();
    }
    return self;
}
$(document).ready(function () {
    $('#form_plan')
            .validate({
                rules: {
                    title: "required",
                    //tags: {require_from_tags: true},
                    type: {required: true}
                },
                messages: {
                    title: "请输入标题",
                    //tags: {require_from_tags: "请写入至少一个标签"},
                    type: {required: "请选择一个类型"}
                }
            });
    $('#form_step')
            .validate({
                rules: {
                    title: "required"
                },
                messages: {
                    title: "请输入标题"
                }
            });
    var myplanobj = new myplanview();
    ko.applyBindings(myplanobj, document.getElementById("addplan"));
});

//var myplanmodelobj = new myplanmodel();
//ko.applyBindings(myplanmodelobj);