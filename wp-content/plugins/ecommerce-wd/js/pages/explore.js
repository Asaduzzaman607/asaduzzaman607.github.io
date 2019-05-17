


////////////////////////////////////////////////////////////////////////////////////////
// Constructor                                                                        //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Public Methods                                                                     //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Getters & Setters                                                                  //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Private Methods                                                                    //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Listeners                                                                          //
////////////////////////////////////////////////////////////////////////////////////////
function onItemClick(event, obj) {
  var thisTr = jQuery(obj).closest("tr");
  var articleId = jQuery(thisTr).attr("itemId");
  var articleTitle = jQuery(thisTr).attr("itemTitle");
  window.parent[_callback](articleId, articleTitle);
  window.parent.tb_remove();
}


jQuery(document).ready(function () {
  for (var i = 0; i < _selectedIds.length; i++) {
    var selectedId = _selectedIds[i];
    if (selectedId != "") {
      jQuery("form[name=adminForm] input[type=checkbox][name^=cid][value=" + selectedId + "]").prop("checked", true);
    }
  }
});

////////////////////////////////////////////////////////////////////////////////////////
// Public Methods                                                                     //
////////////////////////////////////////////////////////////////////////////////////////
function submitCheckedItems() {
  var pages = [];
  jQuery("form[name=adminForm] input[type=checkbox][name^=cid]:checked").each(function () {
    var jq_thisTr = jQuery(this).closest("tr");
    var page = {};
    page.id = jq_thisTr.attr("itemId");
    page.title = jq_thisTr.attr("itemTitle");
    pages.push(page);
  });
  window.parent[_callback](pages);
  window.parent.tb_remove();
}

////////////////////////////////////////////////////////////////////////////////////////
// Getters & Setters                                                                  //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Private Methods                                                                    //
////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////
// Listeners                                                                          //
////////////////////////////////////////////////////////////////////////////////////////
function onBtnSelectClick(event, obj) {
  submitCheckedItems();
}
