from django.shortcuts import render
from datetime import datetime

def home(request):
    if 'error' in request.GET:
        error_info = {
                "1": "Sujet vide.",
                "2": "Aucun corps de message renseigné.",
                "3": "Adresse e-mail invalide.",
                "4": "Toutes mes excuses. L'envoi de mail est actuellement désactivé. N'hésitez pas à me contacter sur les réseaux sociaux !",
                "5": "L'envoi a échoué pour une raison inconnue. Réessayez plus tard ou contactez moi sur les réseaux sociaux.",
                "6": "Le champ anti-robot a été rempli.",
            }.get(request.GET['error'], "")
    else:
        error_info = ""

    return render(request, 'portfolio_main/index.html', {'guitar_years': datetime.now().year - 2003, 'error_info': error_info, 'success_info': ('success' in request.GET), 'sendmail_enabled': False})
