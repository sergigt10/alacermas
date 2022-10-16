{{ $categoria->nom_cat }}
<!-- Recursivitat per mostrar els fills d'aquesta categoria -->
<x-categories :categories="$categoria->children" />