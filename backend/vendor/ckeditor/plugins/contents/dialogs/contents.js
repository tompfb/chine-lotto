﻿CKEDITOR.dialog.add("contents", function (b) {
  return {
    title: "Edit",
    minWidth: 200,
    minHeight: 100,
    contents: [
      {
        id: "info",
        elements: [
          {
            id: "align",
            type: "select",
            label: "Align",
            items: [
              [b.lang.common.notSet, ""],
              [b.lang.common.alignLeft, "float-left"],
              [b.lang.common.alignRight, "float-right"],
            ],
            default: b.lang.common.notSet,
            setup: function (a) {
              void 0 === a.data.align
                ? this.setValue("")
                : this.setValue(a.data.align);
            },
            commit: function (a) {
              a.setData("align", this.getValue());
            },
          },
          {
            id: "chkInsertOpt",
            type: "checkbox",
            label: "Ignore nested headers",
            default: !0,
            setup: function (a) {
              void 0 === a.data.chkInsertOpt
                ? this.setValue(!1)
                : this.setValue(a.data.chkInsertOpt);
            },
            commit: function (a) {
              a.setData("chkInsertOpt", this.getValue());
            },
          },
        ],
      },
    ],
  };
});
