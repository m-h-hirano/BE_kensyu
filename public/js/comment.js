$(function(){
  get_data();
})

// コメントを取得
function get_data(){    
  $.ajaxSetup({
      headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
  });
  $.get({
      url: "/admin/result/ajax/" + questionId,
      method: 'POST',
      dataType: 'json'
  })
  .done(function(data){
      // 前のコメントリストを削除
      $('#comment-data').find('.comment-visible').remove();
      // コメントリストをクローンして表示
      for(var i = 0; i < data.commentData.length; i++){
          var commentClone = $('#comment-list').clone(true).removeAttr('style').addClass('comment-visible');
          commentClone.children('#name').first().append(data.commentData[i].name);
          commentClone.children('#comment').first().append(data.commentData[i].answer);
          $('#comment-data').append(commentClone);
      }
  })
  .fail(function(){
  })

  // 5秒ごとに更新
  setTimeout("get_data()", 5000);

}
