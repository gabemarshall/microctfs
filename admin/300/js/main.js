function qParam(param) {
    param = param.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var r = new RegExp("[\\?&]" + param + "=([^&#]*)"),
    results = r.exec(location.search);
    return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}