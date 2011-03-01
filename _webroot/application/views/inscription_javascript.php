<script type="text/javascript" src="<?php echo $this->config->item('base_url');?>js/jquery-1.5.js"></script>
<script type="text/javascript">
	var activeTab = 1;
	$(document).ready(function() {
		$('#previous').click(function(el){
			var prevTab = activeTab;
			activeTab = activeTab - 1;
			$('#etape'+prevTab).css('display', 'none');
			$('#etape'+activeTab).fadeIn('slow');
			if(activeTab == 1){
				$('#previous').css('display', 'none');
			}else{
				$('#next').css('display', '');
				$('#previous').css('display', '');
				$('#submit').css('display', 'none');
			}
			$('.etapes li').each(function(el){
				$(this).removeClass('active');
				if($(this).attr('id') == "tab_"+activeTab){
					$(this).addClass('active');
				}
			})
		});
		$('#next').click(function(el){
			var prevTab = activeTab;
			activeTab = activeTab + 1;
			$('#etape'+prevTab).css('display', 'none');
			$('#etape'+activeTab).fadeIn('slow');
			if(activeTab == 3){
				$('#next').css('display', 'none');
				$('#submit').css('display', '');
				$('#previous').css('display', '');
			}else{
				$('#next').css('display', '');
				$('#previous').css('display', '');
				$('#submit').css('display', 'none');
			}
			$('.etapes li').each(function(el){
				$(this).removeClass('active');
				if($(this).attr('id') == "tab_"+activeTab){
					$(this).addClass('active');
				}
			})
		});
	});
</script>