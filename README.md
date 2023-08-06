# fil_rouge_symfo
aka **Sebfony** :boom:
### Connection en admin
login : *admin@admin.com*  
mot de passe : *password*  
### Connection en user
login : *user1@users.com*  
mot de passe : *password*  

On peut itérer les mails des users pour connecter d'autres profils users:  
*user2@users.com*  
*user3@users.com*  
*user4@users.com*  
...  

Visiteur (utilisateur non connecté)
- :heavy_check_mark: Naviguer sur les catégories et articles.
- :heavy_check_mark: Créer un compte user.
- :heavy_check_mark: Pouvoir se connecter au compte user créé.

User (utilisateur connecté)
- :heavy_check_mark: Consulter ses commentaires.
- :heavy_check_mark: Supprimer ses commentaires.
- :heavy_check_mark: Modifier son profil.
- :heavy_check_mark: Supprimer son compte.
      
Bonus
- :heavy_check_mark: Ajouter un status booléen aux commentaires, donné FALSE à la création (car non validés).
- :heavy_check_mark: Donner à l'admin l'accès à la liste des commentaires non validés.
- :heavy_check_mark: Donner à l'admin la possibilité de valider un commentaire ou de le supprimer.
      
Sur-bonus
- :heavy_check_mark: Afficher pour l'admin le nombre de commentaires non validés, actualisé à chaque valisation ou suppression.
- :heavy_check_mark: Reporter ce nombre dans le sidebar pour qu'il soit visible sur toutes les vues admin, et le retirer lorsque aucun commentaire n'est en attente.
- :heavy_check_mark: Distinguer pour l'user ses commentaires validés et ses commentaires non validés.
- :heavy_check_mark: Permettre à l'user de consulter l'article qu'il avait commenté pour chaque commentaire.
