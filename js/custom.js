 /*if (document.layers) {
            //Capture the MouseDown event.
            document.captureEvents(Event.MOUSEDOWN);

            //Disable the OnMouseDown event handler.
            $(document).mousedown(function () {
                return false;
            });
        }
        else {
            //Disable the OnMouseUp event handler.
            $(document).mouseup(function (e) {
                if (e != null && e.type == "mouseup") {
                    //Check the Mouse Button which is clicked.
                    if (e.which == 2 || e.which == 3) {
                        //If the Button is middle or right then disable.
                        return false;
                    }
                }
            });
        }

        //Disable the Context Menu event.
        $(document).contextmenu(function () {
            return false;
        });document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
        }
        return false;
};*/