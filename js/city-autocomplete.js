$(function(){
  var city = [
    { value: 'Bandung'},
    { value: 'Cirebon'},
    { value: 'Jakarta'},
    { value: 'Surabaya'},
    { value: 'Indramayu'},
    { value: 'Yogyakarta'},
    { value: 'Majalengka'},
    { value: 'Sumedang'},
    { value: 'Bogor'},
    { value: 'Subang'},
    { value: 'Karawang'},
    { value: 'Brebes'},
    { value: 'Tegal'},
    { value: 'Solo'},
    { value: 'Tasikmalaya'},
    { value: 'Cianjur'},
    { value: 'Ciamis'},
    { value: 'Banjar'},    
  ];
  
  var time = [
		{ value: '00:00'},
		{ value: '01:00'},
		{ value: '02:00'},
		{ value: '03:00'},
		{ value: '04:00'},
		{ value: '05:00'},
		{ value: '06:00'},
		{ value: '07:00'},
		{ value: '08:00'},
		{ value: '09:00'},
		{ value: '10:00'},
		{ value: '11:00'},
		{ value: '12:00'},
		{ value: '13:00'},
		{ value: '14:00'},
		{ value: '15:00'},
		{ value: '16:00'},
		{ value: '17:00'},
		{ value: '18:00'},
		{ value: '19:00'},
		{ value: '20:00'},
		{ value: '21:00'},
		{ value: '22:00'},
		{ value: '23:00'},
  ];
  
  // setup autocomplete function pulling from currencies[] array
  $('#autoFrom').autocomplete({
    lookup: city,
    onSelect: function (suggestion) {      
      $('#autoFrom').html(suggestion.value);
    }
  });
  $('#autoTo').autocomplete({
    lookup: city,
    onSelect: function (suggestion) {      
      $('#autoTo').html(suggestion.value);
    }
  });
  $('#autoTime').autocomplete({
    lookup: time,
    onSelect: function (suggestion) {      
      $('#autoTime').html(suggestion.value);
    }
  });
});
