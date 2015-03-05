var planmodel = function () {
    var self = this;
    var planurls = urls.plan;
    self.baseurl = urls.plan.baseurl;
    self.plans = ko.observableArray(gl.plans);
    //添加计划
    self.add = function () {
        if ($("#form_plan").valid()) {
            var $tagsval = $('#tags').val();
            if ($tagsval != "") {
                var plandata = $('#form_plan').serializeForm();
                $.post(planurls.addurl, plandata, function (result) {
                    if (result.result == 'success') {
                        //alert('添加成功');
                        self.plans.push(result.plan);
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

    self.addstep = function () {
        if ($("#form_step").valid()) {
            var data = $('#form_step').serializeForm();
            $.post(planurls.addstepurl, data, function (result) {
                if (result.result == 'success') {
                    alert('添加成功');
                } else {
                    alert(result.message);
                }
            });
        }
    }
    self.getbyuid = function (uid) {
        //$.get()
    }

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
    self.showaddplan = function () {
        $('#tmp_addplan').hide();
        $('#form_plan').show();
        //$('#form_plan').toggle();
    }
    return self;
}

var myplanobj = new myplanview();
ko.applyBindings(myplanobj, document.getElementById("addplan"));
//var myplanmodelobj = new myplanmodel();
//ko.applyBindings(myplanmodelobj);