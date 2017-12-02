/**
 * Created by Koami on 18/11/2017.
 */

 /*
 *	Clients filtre
 */
var usersList = new List('test-list', { valueNames: ['nom'],
    page: 10,
    pagination: true
});

/*
 *	Produits filtre
 */
var ProduitsList = new List('produits-list', { 
	valueNames: ['nom', 'prix', 'qte', 'subCategorie'],
    page: 10,
    pagination: true
});

/*
 *	Categories filtre
 */

 var CategoriesList = new List('categories-list', { 
	valueNames: ['id', 'nom'],
    page: 10,
    pagination: true
});

/*
 *	Sous-Categories filtre
 */
 var SubCategoriesList = new List('sub-categories-list', { 
	valueNames: ['id', 'nom', 'categorie'],
    page: 10,
    pagination: true
});

/*
 *	Commandes filtre
 */
 var CommandesList = new List('commandes-list', { 
	valueNames: ['date', 'reference', 'username', 'etat', 'kabba'],
    page: 10,
    pagination: true
});

 /*
 *	Partenaires filtre
 */

 var PartenairesList = new List('partenaires-list', { 
	valueNames: ['id', 'nom'],
    page: 10,
    pagination: true
});

 /*
 *	Garanties filtre
 */

 var GarantiesList = new List('garanties-list', { 
	valueNames: ['id', 'nom'],
    page: 10,
    pagination: true
});


/*
 *	Rayon filtre
 */

 var RayonsList = new List('rayons-list', { 
	valueNames: ['id', 'nom'],
    page: 10,
    pagination: true
});