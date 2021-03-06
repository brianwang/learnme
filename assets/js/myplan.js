var stepmodel = function () {
    var self = this;
    for (var ky in arguments[0]) {
        if (ky != 'id' && ky != 'plan_id') {
            self[ky] = ko.observable(arguments[0][ky]);
        } else {
            self[ky] = arguments[0][ky];
        }
    }
    //console.log(self);
    //for(var key in arguments)
//    self.title = ko.observable(title);
//    self.idx = ko.observable(idx);
//    self.importance = ko.observable(importance);
//    self.emergency = ko.observable(emergency);
//    self.createtime = ko.observable(createtime);
    return self;
}

var planmodel = function (plan) {
    var self = this;
    ///self.prototype = plan;
    for (var key in plan) {
        self[key] = plan[key];
    }

    self.title = ko.observable(plan.title);
    //var steps = plan.steps.slice(0);
    self.steps = ko.observableArray([]);
    for (var j = 0; j < plan.steps.length; j++) {
        self.steps.push(new stepmodel(plan.steps[j]));
    }
    //console.log(plan);
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
    var self = this;
    var planurls = urls.plan;
    self.baseurl = planurls.baseurl;
    self.plans = ko.observableArray([]);
    for (var i = 0; i < gl.plans.length; i++) {
        var plan = new planmodel(gl.plans[i]);
        self.plans.push(plan);
    }
    self.showaddplan = function () {
        $('#tmp_addplan').hide();
        $('#form_plan').show();
        //$('#form_plan').toggle();
    }
    self.showaddstep = function (plan) {
        //$(this).hide();
        //$(this).next().show();
        $('#tmp_addstep_' + plan.id).hide();
        $('#form_step_' + plan.id).parent().show();
    }

    self.updatestep = function (step) {

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
                    var step = new stepmodel(result.step);
                    var match = ko.utils.arrayFirst(self.plans(), function (item) {
                        return step.plan_id == item.id;
                    });
                    if (match) {
                        match.steps.push(step);
                    }
                    self.hideaddstep({id: step.plan_id});
                    //self.plans.push
                } else {
                    alert(result.message);
                }
            });
        }
    }
    self.hideaddstep = function (plan) {
        $('#tmp_addstep_' + plan.id).show();
        $('#form_step_' + plan.id).parent().hide();
    }

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
        $('#tags').tagsinput('removeAll');
        $('#tmp_addplan').show();
        $('#form_plan').hide();
    }

    self.update = self.add;


    self.remove = function () {
        var planid = $(this).before();
        updateplan
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

    self.showsteps = function (plan, event) {
        var stepid = '#steps_' + plan.id;
//        var tar = $(event.target);
//        if (tar.hasClass("glyphicon-chevron-up")) {
//            tar.removeClass('glyphicon-chevron-up');
//            tar.addClass('glyphicon-chevron-down');
//        } else {
//            tar.removeClass('glyphicon-chevron-down');
//            tar.addClass('glyphicon-chevron-up');
//        }
        $(stepid).toggle();
    }


    self.getbyuid = function (uid) {
        //$.get()
    }
    self.updateplan = function (plan) {
        //$('#updateplan_'+plan.id).append()
        var inputid = '#input_' + plan.id;
        $(inputid).show();
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
                self.plans()[idx].title(newplan.title);

                self.closesave(plan);
            } else {
                alert(result.message);
            }
        });
    }

    self.closesave = function (plan) {
        var inputid = '#input_' + plan.id;
        $(inputid).prev().show();
        $(inputid).toggle();
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
    ko.applyBindings(myplanobj, document.getElementById("planlist"));
});

//var myplanmodelobj = new myplanmodel();
//ko.applyBindings(myplanmodelobj);