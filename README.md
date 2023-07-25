# Weather_widget
### openweathermap의 API가 필요
  - https://openweathermap.org/api 에서 발급가능

### Require JQuery

#### 1시간마다 새로운 데이터를 받을수 있도록 리눅스의 crontab 을 사용하여 구성하여야함
  - php weather_save.php

#### weather_save.php
  - API 요청(request)시 서울특별시, 부산광역시, 인천광역시, 대구광역시, 대전광역시, 광주광역시, 울산광역 시, 세종특별자치시(공주시), 경기도, 충청북도, 충청남도, 전라북도, 전라남도, 경상북도, 경상남도, 강원특별자치도, 제주특별자치도의 날씨정보 데이터를 JSON형식으로 응답(Response) 받아 데이터들을 로컬에 JSON 형식으로 저장을 하여 API 요청횟수를 줄인다
  - php파일에 사용자의 API키를 삽입하여야함
 
#### weather.html
  - Widget의 Script 요청이 들어왔을때 로컬에 저장되어져있는 JSON파일을 요청하고 JSON DECODE를 진행하여 html상에 표시해준다.

#### style.css
  - Widget의 기본 스타일시트 입맛에 맞게 수정 후 사용

![Widget](https://github.com/wjdgns4019/Weather_widget/assets/41509711/6ce325c0-bf37-43d0-857c-7a92dd400fa7)
