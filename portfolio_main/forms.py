from django import forms
from django.utils.translation import ugettext_lazy as _

class ContactForm(forms.Form):
    email = forms.EmailField(label=_("Adresse e-mail"))
    subject = forms.CharField(label=_("Sujet"), max_length=50)
    content = forms.CharField(widget=forms.Textarea, label=_("Message"))

