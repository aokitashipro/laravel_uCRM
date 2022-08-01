type MemberType = {
  name: string;
  age: number;
}

type ErrorHandling = {
  success: boolean;
  error?: { message: string };
};

type ArtistsData = { 
  artists: { name: string }[];
};

export { MemberType, ErrorHandling, ArtistsData }