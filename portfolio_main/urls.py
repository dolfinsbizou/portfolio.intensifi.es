from django.conf.urls import url
from . import views

urlpatterns = [
    url(r'^(?P<lang>[a-zA-Z]*)$', views.home, name="home"),
]
