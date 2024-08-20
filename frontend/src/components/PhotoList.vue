<template>
    <div class="container mx-auto p-4">
      <h1 class="text-3xl font-bold mb-6 text-center text-indigo-600">Photo List</h1>
      <div class="overflow-x-auto shadow-lg rounded-lg">
        <table class="min-w-full bg-white rounded-lg">
          <thead>
            <tr class="bg-indigo-500 text-white">
              <th class="py-3 px-6 border-b-2 border-indigo-700 rounded-tl-lg">Photo</th>
              <th class="py-3 px-6 border-b-2 border-indigo-700">Latitude</th>
              <th class="py-3 px-6 border-b-2 border-indigo-700 rounded-tr-lg">Longitude</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="photo in photos" :key="photo.id" class="hover:bg-indigo-100 transition duration-200">
              <td class="py-4 px-6 border-b border-indigo-200 text-center">
                <img :src="getPhotoUrl(photo.file_path)" alt="Photo" class="h-24 w-24 object-cover rounded-full shadow-md">
              </td>
              <td class="py-4 px-6 border-b border-indigo-200 text-center text-gray-700">{{ photo.latitude }}</td>
              <td class="py-4 px-6 border-b border-indigo-200 text-center text-gray-700">{{ photo.longitude }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        photos: []
      };
    },
    created() {
      this.fetchPhotos();
    },
    methods: {
      getPhotoUrl(filePath) {
        return `http://172.25.0.3/storage/${filePath}`;
      },
      fetchPhotos() {
        axios.get('http://172.25.0.3/api/photos')
          .then(response => {
            this.photos = response.data;
          })
          .catch(error => {
            console.error('Error fetching photos', error);
          });
      }
    }
  };
  </script>
  
  <style>
  .container {
    background: linear-gradient(135deg, #f0f4f8, #d9e4f1);
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
  }
  
  table {
    border-collapse: separate;
    border-spacing: 0;
    border-radius: 15px;
  }
  
  th {
    background: #4c51bf;
    color: #ffffff;
    text-transform: uppercase;
  }
  
  td {
    color: #2d3748;
  }
  
  img {
    transition: transform 0.3s ease;
  }
  
  img:hover {
    transform: scale(1.1);
  }
  </style>
  